@extends('layouts.app')

@section('title', 'Administration')

@section('content')
<div class="card shadow">
    <div class="card-header bg-danger text-white">
        <h2 class="mb-0">Administration</h2>
    </div>
    <div class="card-body">
        <h3>Section Administration</h3>
        <p>Accédez aux paramètres d'administration du système.</p>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Paramètres</h4>
                        <p>Configurez les paramètres du système.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Sécurité</h4>
                        <p>Gérez les paramètres de sécurité.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 