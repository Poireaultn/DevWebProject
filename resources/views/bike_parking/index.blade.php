@extends('layouts.app')

@section('title', 'Gestion du Parking à Vélos')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion du Parking à Vélos</h1>

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
                            <th>Capacité totale</th>
                            <th>Places disponibles</th>
                            <th>État</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($parkings as $parking)
                        <tr>
                            <td>{{ $parking->name }}</td>
                            <td>{{ $parking->total_capacity }}</td>
                            <td>{{ $parking->available_spaces }}</td>
                            <td>
                                <span class="badge {{ $parking->is_open ? 'bg-success' : 'bg-danger' }}">
                                    {{ $parking->is_open ? 'Ouvert' : 'Fermé' }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('bike_parking.toggle', $parking->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn {{ $parking->is_open ? 'btn-danger' : 'btn-success' }} btn-sm">
                                        {{ $parking->is_open ? 'Fermer' : 'Ouvrir' }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Aucun parking à vélos trouvé</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <button onclick="history.back()" class="btn btn-secondary">Retour</button>
    </div>
</div>
@endsection 