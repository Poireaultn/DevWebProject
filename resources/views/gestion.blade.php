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
    </div>
</div>
@endsection 