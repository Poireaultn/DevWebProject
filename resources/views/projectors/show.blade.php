@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Vidéoprojecteurs</h1>
    
    <div class="row">
        @forelse($projectors as $projector)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $projector->name }}</h5>
                        <p class="card-text">
                            <strong>Salle:</strong> {{ $projector->room_name }}<br>
                            <strong>Statut:</strong> 
                            <span class="badge {{ $projector->is_on ? 'bg-success' : 'bg-danger' }}">
                                {{ $projector->is_on ? 'Allumé' : 'Éteint' }}
                            </span><br>
                            <strong>Source:</strong> {{ $projector->source }}<br>
                            <strong>Luminosité:</strong> {{ $projector->brightness }}%
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Aucun vidéoprojecteur trouvé.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection 