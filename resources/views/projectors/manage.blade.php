@extends('layouts.app')

@section('title', 'Gestion des Vidéoprojecteurs')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Gestion des Vidéoprojecteurs</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Salle</th>
                    <th>État</th>
                    <th>Source</th>
                    <th>Luminosité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projectors as $projector)
                <tr>
                    <td>{{ $projector->name }}</td>
                    <td>{{ $projector->room_name }}</td>
                    <td>
                        <span class="badge {{ $projector->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $projector->is_on ? 'Allumé' : 'Éteint' }}
                        </span>
                    </td>
                    <td>{{ $projector->source }}</td>
                    <td>{{ $projector->brightness }}%</td>
                    <td>
                        <form action="{{ route('projectors.toggle', $projector->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm {{ $projector->is_on ? 'btn-danger' : 'btn-success' }}">
                                {{ $projector->is_on ? 'Éteindre' : 'Allumer' }}
                            </button>
                        </form>
                        
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $projector->id }}">
                            Modifier
                        </button>
                    </td>
                </tr>

                <!-- Modal de modification -->
                <div class="modal fade" id="editModal{{ $projector->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $projector->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $projector->id }}">Modifier {{ $projector->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('projectors.update', $projector->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="source" class="form-label">Source</label>
                                        <select name="source" id="source" class="form-select">
                                            <option value="HDMI1" {{ $projector->source == 'HDMI1' ? 'selected' : '' }}>HDMI 1</option>
                                            <option value="HDMI2" {{ $projector->source == 'HDMI2' ? 'selected' : '' }}>HDMI 2</option>
                                            <option value="VGA" {{ $projector->source == 'VGA' ? 'selected' : '' }}>VGA</option>
                                            <option value="USB" {{ $projector->source == 'USB' ? 'selected' : '' }}>USB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="brightness" class="form-label">Luminosité</label>
                                        <input type="range" class="form-range" name="brightness" id="brightness" min="0" max="100" value="{{ $projector->brightness }}">
                                        <div class="text-center" id="brightnessValue">{{ $projector->brightness }}%</div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script>
document.querySelectorAll('input[type="range"]').forEach(function(slider) {
    slider.addEventListener('input', function(e) {
        e.target.nextElementSibling.textContent = e.target.value + '%';
    });
});
</script>
@endpush
@endsection 