@extends('layouts.app')

@section('title', 'Gestion des Détecteurs de Fumée')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion des Détecteurs de Fumée</h1>
    
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Localisation</th>
                            <th>État</th>
                            <th>Dernier Test</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hall Principal</td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>2024-03-15</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Tester</button>
                                <button class="btn btn-danger btn-sm">Désactiver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Salle de Conférence</td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>2024-03-14</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Tester</button>
                                <button class="btn btn-danger btn-sm">Désactiver</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('gestion.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>
@endsection 