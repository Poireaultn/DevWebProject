@extends('layouts.app')

@section('title', 'Gestion')

@section('content')
<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h2 class="mb-0">Gestion</h2>
    </div>
    <div class="card-body">
        <h3>Section Gestion</h3>
        <p>Gérez vos ressources et vos données.</p>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Ressources</h4>
                        <p>Gérez vos ressources disponibles.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Utilisateurs</h4>
                        <p>Gérez les utilisateurs du système.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 