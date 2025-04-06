@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Visualisation des panneaux d'affichage</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse($panels as $panel)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $panel->name }}</h5>
                        <p class="card-text">
                            <strong>Salle:</strong> {{ $panel->room }}<br>
                            <strong>Statut:</strong> 
                            <span class="badge {{ $panel->status === 'on' ? 'bg-success' : 'bg-danger' }}">
                                {{ $panel->status === 'on' ? 'Allumé' : 'Éteint' }}
                            </span><br>
                            <strong>Contenu:</strong> {{ $panel->content }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun panneau d'affichage trouvé.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection 