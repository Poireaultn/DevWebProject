@extends('layouts.app')

@section('title', 'Gestion des Détecteurs de Fumée')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion des Détecteurs de Fumée</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Salle</th>
                            <th>État</th>
                            <th>Détection</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($detectors as $detector)
                        <tr>
                            <td>{{ $detector->name }}</td>
                            <td>{{ $detector->room_name }}</td>
                            <td>
                                <span class="badge {{ $detector->is_active ? 'bg-success' : 'bg-danger' }}">
                                    {{ $detector->is_active ? 'Actif' : 'Inactif' }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $detector->smoke_detected ? 'bg-danger' : 'bg-success' }}">
                                    {{ $detector->smoke_detected ? 'Fumée détectée' : 'Aucune fumée' }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('smoke_detectors.toggle', $detector->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn {{ $detector->is_active ? 'btn-danger' : 'btn-success' }} btn-sm">
                                        {{ $detector->is_active ? 'Désactiver' : 'Activer' }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Aucun détecteur de fumée trouvé</td>
                        </tr>
                        @endforelse
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