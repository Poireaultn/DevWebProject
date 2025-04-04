@extends('layouts.app')

@section('title', 'Gestion des Chauffages')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Gestion des Chauffages</h1>
    
    <div class="row">
        @foreach($heaters as $heater)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $heater->name }}</h5>
                    
                    <div class="mb-3">
                        <p class="card-text">
                            État: 
                            <span class="badge {{ $heater->is_on ? 'bg-success' : 'bg-danger' }}">
                                {{ $heater->is_on ? 'Allumé' : 'Éteint' }}
                            </span>
                        </p>
                        <form action="{{ route('heaters.toggle', $heater->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn {{ $heater->is_on ? 'btn-danger' : 'btn-success' }}">
                                {{ $heater->is_on ? 'Éteindre' : 'Allumer' }}
                            </button>
                        </form>
                    </div>

                    <form action="{{ route('heaters.update', $heater->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="temperature" class="form-label">Température (°C)</label>
                            <input type="number" step="0.1" class="form-control" id="temperature" name="temperature" 
                                   value="{{ $heater->temperature }}" min="10" max="30" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="mode" class="form-label">Mode</label>
                            <select class="form-select" id="mode" name="mode" required>
                                <option value="chauffage" {{ $heater->mode === 'chauffage' ? 'selected' : '' }}>Chauffage</option>
                                <option value="climatisation" {{ $heater->mode === 'climatisation' ? 'selected' : '' }}>Climatisation</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 