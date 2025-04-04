@extends('layouts.app')

@section('title', 'Visualisation')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Visualisation</h1>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Volets Connectés</h5>
                    <p class="card-text">Visualisez l'état de vos volets connectés en temps réel.</p>
                    <a href="{{ route('shutters.show') }}" class="btn btn-primary">Voir les volets</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chauffages Connectés</h5>
                    <p class="card-text">Visualisez l'état et la température de vos chauffages en temps réel.</p>
                    <a href="{{ route('heaters.show') }}" class="btn btn-primary">Voir les chauffages</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 