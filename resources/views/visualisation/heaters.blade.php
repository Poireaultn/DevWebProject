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
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 