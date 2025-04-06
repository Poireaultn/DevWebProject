@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Gestion des Détecteurs de Fumée</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse($detectors as $detector)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $detector->name }}</h5>
                        <form action="{{ route('smoke_detectors.update', $detector) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Salle</label>
                                <input type="text" class="form-control" value="{{ $detector->room_name }}" readonly>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" 
                                           id="is_active_{{ $detector->id }}" 
                                           {{ $detector->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active_{{ $detector->id }}">
                                        Activer le détecteur
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="smoke_detected" 
                                           id="smoke_detected_{{ $detector->id }}" 
                                           {{ $detector->smoke_detected ? 'checked' : '' }}>
                                    <label class="form-check-label" for="smoke_detected_{{ $detector->id }}">
                                        Fumée détectée
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun détecteur de fumée trouvé.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection 