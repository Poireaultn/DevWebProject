@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Gestion des Vidéoprojecteurs</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse($projectors as $projector)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $projector->name }}</h5>
                        <form action="{{ route('projectors.update', $projector) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Salle</label>
                                <input type="text" class="form-control" value="{{ $projector->room_name }}" readonly>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_on" 
                                           id="is_on_{{ $projector->id }}" 
                                           {{ $projector->is_on ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_on_{{ $projector->id }}">
                                        Allumer le projecteur
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Source</label>
                                <select class="form-select" name="source">
                                    <option value="HDMI1" {{ $projector->source === 'HDMI1' ? 'selected' : '' }}>HDMI 1</option>
                                    <option value="HDMI2" {{ $projector->source === 'HDMI2' ? 'selected' : '' }}>HDMI 2</option>
                                    <option value="VGA" {{ $projector->source === 'VGA' ? 'selected' : '' }}>VGA</option>
                                    <option value="USB" {{ $projector->source === 'USB' ? 'selected' : '' }}>USB</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Luminosité</label>
                                <input type="range" class="form-range" name="brightness" 
                                       min="0" max="100" value="{{ $projector->brightness }}">
                                <div class="text-center">{{ $projector->brightness }}%</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun vidéoprojecteur trouvé.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection 