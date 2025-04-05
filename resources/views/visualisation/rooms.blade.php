@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Occupation des Salles</h2>

    @php
        $emptyRooms = $rooms->where('people_count', 0)->where('is_reserved', false)->count();
        $totalRooms = $rooms->count();
        $emptyPercentage = $totalRooms > 0 ? ($emptyRooms / $totalRooms) * 100 : 0;
    @endphp

    <div class="alert alert-info">
        Pourcentage de salles vides: {{ number_format($emptyPercentage, 1) }}%
    </div>

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

                        @if(isset($room->next_reservation_time) && (!$roomReservation || $room->next_reservation_time != $roomReservation->start_time))
                        <div class="mt-2">
                            <small class="text-info">
                                Prochaine réservation à {{ $room->next_reservation_time->format('H:i') }}
                            </small>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        @endforeach
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
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Aucune réservation en cours</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection 