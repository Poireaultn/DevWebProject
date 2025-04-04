@extends('layouts.app')

@section('title', 'Visualisation des Chauffages')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">État des Chauffages</h1>
    
    <div class="row">
        @foreach($heaters as $heater)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $heater->name }}</h5>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="heater-icon me-3">
                            @if($heater->is_on)
                                <i class="fas fa-fire text-danger" style="font-size: 2rem;"></i>
                            @else
                                <i class="fas fa-snowflake text-primary" style="font-size: 2rem;"></i>
                            @endif
                        </div>
                        <div>
                            <p class="card-text mb-0">
                                État: 
                                <span class="badge {{ $heater->is_on ? 'bg-success' : 'bg-danger' }}">
                                    {{ $heater->is_on ? 'Allumé' : 'Éteint' }}
                                </span>
                            </p>
                            <p class="card-text mb-0">
                                Température: {{ $heater->temperature }}°C
                            </p>
                            <p class="card-text">
                                Mode: 
                                <span class="badge {{ $heater->mode === 'chauffage' ? 'bg-danger' : 'bg-primary' }}">
                                    {{ $heater->mode === 'chauffage' ? 'Chauffage' : 'Climatisation' }}
                                </span>
                            </p>
                        </div>
                    </div>
                    
                    <small class="text-muted">
                        Dernière mise à jour: {{ $heater->updated_at->diffForHumans() }}
                    </small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 