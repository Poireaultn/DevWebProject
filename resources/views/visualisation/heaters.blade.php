@extends('layouts.app')

@section('title', 'Visualisation des Chauffages')

@section('content')
<div class="container">
    <h2>État des Chauffages</h2>

    <div class="row">
        @foreach($heaters as $heater)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $heater->name }}</h5>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $heater->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $heater->is_on ? 'En marche' : 'Arrêté' }}
                        </span>
                        <br>
                        Température actuelle: {{ $heater->current_temperature }}°C
                        <br>
                        Température cible: {{ $heater->target_temperature }}°C
                        <br>
                        Mode: {{ ucfirst($heater->mode) }}
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