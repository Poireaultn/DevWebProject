@extends('layouts.app')

@section('title', 'Gestion')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion</h1>
    
    <div class="row">
        @if($showParking)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parking Voiture</h5>
                    <p class="card-text">Gérer les places de parking voiture</p>
                    <a href="{{ route('parking.manage') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showBikeParking)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Parking Vélo</h5>
                    <p class="card-text">Gérer les places de parking vélo</p>
                    <a href="{{ route('bike_parking.manage') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showProjector)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vidéoprojecteur</h5>
                    <p class="card-text">Gérer les vidéoprojecteurs</p>
                    <a href="{{ route('projectors.manage') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showRoom)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Salles</h5>
                    <p class="card-text">Réserver une salle</p>
                    <a href="{{ route('rooms.manage') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showDistributor)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Distributeur</h5>
                    <p class="card-text">Gérer les distributeurs</p>
                    <a href="{{ route('distributors.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showCoffee)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Machine à café</h5>
                    <p class="card-text">Gérer les machines à café</p>
                    <a href="{{ route('coffee_machines.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showCameras)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Caméras</h5>
                    <p class="card-text">Gérer les caméras de surveillance</p>
                    <a href="{{ route('cameras.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showSmokeDetectors)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Détecteurs de fumée</h5>
                    <p class="card-text">Gérer les détecteurs de fumée</p>
                    <a href="{{ route('smoke_detectors.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showDisplayPanels)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Panneaux d'affichage</h5>
                    <p class="card-text">Gérer les panneaux d'affichage</p>
                    <a href="{{ route('display_panels.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showBlinds)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Volets</h5>
                    <p class="card-text">Gérer les volets automatiques</p>
                    <a href="{{ route('blinds.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showLights)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Éclairage</h5>
                    <p class="card-text">Gérer l'éclairage intelligent</p>
                    <a href="{{ route('lights.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif

        @if($showHeating)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chauffage</h5>
                    <p class="card-text">Gérer le système de chauffage</p>
                    <a href="{{ route('heating.index') }}" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection 