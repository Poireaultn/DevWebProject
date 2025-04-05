@extends('layouts.app')

@section('title', 'Gestion des Chauffages')

@section('content')
<div class="container">
    <h2>Gestion des Chauffages</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        @foreach($heaters as $heater)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $heater->room_name }}</h5>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $heater->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $heater->is_on ? 'Allumé' : 'Éteint' }}
                        </span>
                        <br>
                        Température actuelle: {{ $heater->current_temperature }}°C
                        <br>
                        Température cible: {{ $heater->target_temperature }}°C
                    </p>

                    <form action="{{ route('heaters.toggle', $heater) }}" method="POST" class="mb-2">
                        @csrf
                        <button type="submit" class="btn {{ $heater->is_on ? 'btn-danger' : 'btn-success' }}">
                            {{ $heater->is_on ? 'Éteindre' : 'Allumer' }}
                        </button>
                    </form>

                    <form action="{{ route('heaters.update', $heater) }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="number" name="temperature" class="form-control" 
                                   value="{{ $heater->target_temperature }}" 
                                   min="15" max="30" step="0.5" required>
                            <button type="submit" class="btn btn-primary">
                                Définir température
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 