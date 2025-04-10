@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Visualisation des Caméras</h2>
    <div class="row">
        @foreach($cameras as $camera)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $camera->name }}</h5>
                    <p class="card-text">
                        Salle: {{ $camera->room_name }}<br>
                        État: 
                        <span class="badge {{ $camera->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $camera->is_on ? 'Allumée' : 'Éteinte' }}
                        </span><br>
                        Batterie: 
                        <div class="progress">
                            <div class="progress-bar {{ $camera->battery_level > 20 ? 'bg-success' : 'bg-danger' }}" 
                                 role="progressbar" 
                                 style="width: {{ $camera->battery_level }}%"
                                 aria-valuenow="{{ $camera->battery_level }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                                {{ $camera->battery_level }}%
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 