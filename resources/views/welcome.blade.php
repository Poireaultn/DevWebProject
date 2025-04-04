@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body text-center">
                <h1 class="display-4 mb-4">Bienvenue sur notre site</h1>
                <p class="lead">Découvrez nos différentes sections :</p>
                
                <div class="row mt-5">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3>Information</h3>
                                <p>Consultez nos informations détaillées</p>
                                <a href="/information" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3>Visualisation</h3>
                                <p>Explorez nos données visuelles</p>
                                <a href="/visualisation" class="btn btn-primary">Visualiser</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3>Gestion</h3>
                                <p>Gérez vos ressources</p>
                                <a href="/gestion" class="btn btn-primary">Gérer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3>Administration</h3>
                                <p>Accédez aux paramètres d'administration</p>
                                <a href="/administration" class="btn btn-primary">Administrer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
