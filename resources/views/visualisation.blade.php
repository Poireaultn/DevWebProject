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

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lumières Connectées</h5>
                    <p class="card-text">Visualisez l'état de l'éclairage dans chaque salle de l'école.</p>
                    <a href="{{ route('lights.index') }}" class="btn btn-primary">Voir les lumières</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Occupation des Salles</h5>
                    <p class="card-text">Visualisez le nombre de personnes dans chaque salle et le taux d'occupation.</p>
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary">Voir l'occupation</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Emploi du Temps</h5>
                    <p class="card-text">Visualisez l'emploi du temps des salles et les cours programmés.</p>
                    <a href="{{ route('schedule') }}" class="btn btn-primary">Voir l'emploi du temps</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parking Connecté</h5>
                    <p class="card-text">Visualisez l'état du parking et le nombre de places disponibles en temps réel.</p>
                    <a href="{{ route('parking.show') }}" class="btn btn-primary">Voir le parking</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parking à Vélos</h5>
                    <p class="card-text">Visualisez l'état du parking à vélos et le nombre de places disponibles en temps réel.</p>
                    <a href="{{ route('bike_parking.show') }}" class="btn btn-primary">Voir le parking à vélos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 