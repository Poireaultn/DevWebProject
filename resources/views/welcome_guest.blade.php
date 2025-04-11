@extends('layouts.app')

@section('title', 'Accueil - Gestion du Bâtiment')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 mb-4">Bienvenue sur notre Plateforme de Gestion du Bâtiment</h1>
            <p class="lead mb-4">
                Notre système intelligent permet de gérer efficacement les ressources et les espaces du bâtiment.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Connexion Requise</h5>
                    <p class="card-text">
                        Pour accéder à toutes les fonctionnalités, veuillez vous connecter avec vos identifiants.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">En savoir plus</h5>
                    <p class="card-text">
                        Découvrez les fonctionnalités disponibles et comment utiliser notre plateforme.
                    </p>
                    <a href="{{ route('information') }}" class="btn btn-secondary">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.display-4 {
    color: #2c3e50;
    font-weight: 600;
}
.lead {
    color: #34495e;
}
.card {
    border: none;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.btn-primary {
    background-color: #3498db;
    border: none;
}
.btn-secondary {
    background-color: #2c3e50;
    border: none;
}
</style>
@endsection 