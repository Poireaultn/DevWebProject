@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gestion de l'Occupation des Salles</h2>
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="row">
        @foreach($rooms as $room)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->room_name }}</h5>
                    <p class="card-text">
                        Occupation actuelle: {{ $room->people_count }} personnes
                        <br>
                        État: 
                        @if($room->is_reserved)
                            <span class="badge bg-warning">Réservée</span>
                        @elseif($room->people_count > 0)
                            <span class="badge bg-danger">Occupée</span>
                        @else
                            <span class="badge bg-success">Libre</span>
                        @endif
                    </p>
                    
                    @if($room->people_count == 0)
                        @if($room->is_reserved)
                            @if(isset($room->next_reservation_time))
                                <button type="button" class="btn btn-primary" onclick="openReservationModal('{{ $room->room_name }}', '{{ $room->next_reservation_time->format('Y-m-d\TH:i') }}')">
                                    Réserver après {{ $room->next_reservation_time->format('H:i') }}
                                </button>
                            @endif
                        @else
                            <button type="button" class="btn btn-primary" onclick="openReservationModal('{{ $room->room_name }}')">
                                Réserver cette salle
                            </button>
                        @endif
                    @else
                        <button type="button" class="btn btn-secondary" disabled>
                            Salle occupée
                        </button>
                    @endif

                    @if(isset($reservations))
                        @php
                            $roomReservation = $reservations->where('room_name', $room->room_name)->first();
                        @endphp
                        @if($roomReservation)
                        <div class="mt-2">
                            <small class="text-muted">
                                Réservée par: {{ $roomReservation->reserved_by }}<br>
                                Motif: {{ $roomReservation->purpose }}<br>
                                De: {{ $roomReservation->start_time->format('H:i') }}<br>
                                À: {{ $roomReservation->end_time->format('H:i') }}
                            </small>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal unique de réservation -->
    <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationModalLabel">Réserver une salle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('rooms.reserve') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="room_name" id="modal_room_name">
                        
                        <div class="mb-3">
                            <label for="purpose" class="form-label">Motif de la réservation</label>
                            <input type="text" class="form-control" id="purpose" name="purpose" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Heure de début</label>
                            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                        </div>
                        
                        <p class="text-info">Note: La réservation sera automatiquement pour une durée d'une heure.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Réserver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h3 class="mt-4">Réservations en cours et à venir</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Salle</th>
                    <th>Réservé par</th>
                    <th>Motif</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->room_name }}</td>
                    <td>{{ $reservation->reserved_by }}</td>
                    <td>{{ $reservation->purpose }}</td>
                    <td>{{ $reservation->start_time->format('d/m/Y H:i') }}</td>
                    <td>{{ $reservation->end_time->format('d/m/Y H:i') }}</td>
                    <td>
                        <form action="{{ route('rooms.cancel-reservation', $reservation) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Annuler</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Aucune réservation en cours</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<script>
function openReservationModal(roomName, nextReservationTime = null) {
    document.getElementById('modal_room_name').value = roomName;
    document.getElementById('reservationModalLabel').textContent = 'Réserver ' + roomName;
    
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset()); // Correction du fuseau horaire
    
    if (nextReservationTime) {
        // Si on a une prochaine réservation, on définit l'heure de début à la fin de celle-ci
        const nextReservation = new Date(nextReservationTime);
        document.getElementById('start_time').min = nextReservation.toISOString().slice(0, 16);
        document.getElementById('start_time').value = nextReservation.toISOString().slice(0, 16);
    } else {
        // Sinon, on utilise l'heure actuelle
        document.getElementById('start_time').min = now.toISOString().slice(0, 16);
        document.getElementById('start_time').value = '';
    }
    
    // Réinitialiser le formulaire
    document.getElementById('purpose').value = '';
    
    // Ouvrir la modal
    var modal = new bootstrap.Modal(document.getElementById('reservationModal'));
    modal.show();
}
</script>
@endsection 