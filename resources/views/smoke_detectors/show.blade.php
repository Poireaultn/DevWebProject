@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Détecteurs de Fumée</h1>
    
    <div class="row">
        @forelse($detectors as $detector)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $detector->name }}</h5>
                        <p class="card-text">
                            <strong>Salle:</strong> {{ $detector->room_name }}<br>
                            <strong>Statut:</strong> 
                            <span class="badge {{ $detector->is_active ? 'bg-success' : 'bg-danger' }}">
                                {{ $detector->is_active ? 'Actif' : 'Inactif' }}
                            </span><br>
                            <strong>Détection:</strong>
                            <span class="badge {{ $detector->smoke_detected ? 'bg-danger' : 'bg-success' }}">
                                {{ $detector->smoke_detected ? 'Fumée détectée' : 'Aucune fumée' }}
                            </span>
                        </p>
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