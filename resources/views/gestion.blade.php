@extends('layouts.app')

@section('title', 'Gestion')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Gestion</h1>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Volets Connectés</h5>
                    <p class="card-text">Gérez vos volets connectés : ouverture, fermeture et programmation.</p>
                    <a href="{{ route('shutters.index') }}" class="btn btn-primary">Gérer les volets</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chauffages Connectés</h5>
                    <p class="card-text">Gérez vos chauffages : allumage, température et mode de fonctionnement.</p>
                    <a href="{{ route('heaters.index') }}" class="btn btn-primary">Gérer les chauffages</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lumières Connectées</h5>
                    <p class="card-text">Gérez l'éclairage de l'école : allumer ou éteindre les lumières par salle.</p>
                    <a href="{{ route('lights.manage') }}" class="btn btn-primary">Gérer les lumières</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Occupation des Salles</h5>
                    <p class="card-text">Gérez l'occupation des salles : mettre à jour le nombre de personnes par salle.</p>
                    <a href="{{ route('rooms.manage') }}" class="btn btn-primary">Gérer l'occupation</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parking Connecté</h5>
                    <p class="card-text">Gérez le parking : ouverture, fermeture et surveillance des places disponibles.</p>
                    <a href="{{ route('parking.manage') }}" class="btn btn-primary">Gérer le parking</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parking à Vélos</h5>
                    <p class="card-text">Gérez le parking à vélos : ouverture, fermeture et surveillance des places disponibles.</p>
                    <a href="{{ route('bike_parking.manage') }}" class="btn btn-primary">Gérer le parking à vélos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 