@extends('layouts.app')

@section('content')
<div class="container">
    <h2>État des Caméras</h2>

    <div class="row">
        @foreach($cameras as $camera)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $camera->name }}</h5>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $camera->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $camera->is_on ? 'En marche' : 'Arrêtée' }}
                        </span>
                        <br>
                        Batterie: 
                        <span class="badge {{ $camera->battery_level > 20 ? 'bg-success' : 'bg-danger' }}">
                            {{ $camera->battery_level }}%
                        </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-3">
        <a href="{{ route('visualisation.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>
@endsection 