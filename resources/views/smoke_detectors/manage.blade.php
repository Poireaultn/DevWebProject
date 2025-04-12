@extends('layouts.app')

@section('title', 'Gestion des Détecteurs de Fumée')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion des Détecteurs de Fumée</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Visualisation</h5>
                                    <p class="card-text">Voir l'état de tous les détecteurs de fumée</p>
                                    <a href="{{ route('smoke_detectors.show') }}" class="btn btn-primary">Accéder</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Administration</h5>
                                    <p class="card-text">Gérer les détecteurs de fumée (activer/désactiver)</p>
                                    <a href="{{ route('smoke_detectors.index') }}" class="btn btn-primary">Accéder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 