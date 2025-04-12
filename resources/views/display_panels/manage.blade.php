@extends('layouts.app')

@section('title', 'Gestion des Panneaux d\'Affichage')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion des Panneaux d'Affichage</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Visualisation</h5>
                                    <p class="card-text">Voir l'état de tous les panneaux d'affichage</p>
                                    <a href="{{ route('display-panels.show') }}" class="btn btn-primary">Accéder</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Administration</h5>
                                    <p class="card-text">Gérer les panneaux d'affichage (contenu et état)</p>
                                    <a href="{{ route('display-panels.index') }}" class="btn btn-primary">Accéder</a>
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