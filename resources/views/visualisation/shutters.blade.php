@extends('layouts.app')

@section('title', 'Visualisation des Volets')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">État des Volets Connectés</h1>
    
    <div class="row">
        @foreach($shutters as $shutter)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $shutter->name }}</h5>
                    <div class="d-flex align-items-center">
                        <div class="shutter-icon me-3">
                            @if($shutter->is_open)
                                <i class="fas fa-window-maximize text-success" style="font-size: 2rem;"></i>
                            @else
                                <i class="fas fa-window-minimize text-danger" style="font-size: 2rem;"></i>
                            @endif
                        </div>
                        <div>
                            <p class="card-text mb-0">
                                État: 
                                <span class="badge {{ $shutter->is_open ? 'bg-success' : 'bg-danger' }}">
                                    {{ $shutter->is_open ? 'Ouvert' : 'Fermé' }}
                                </span>
                            </p>
                            <small class="text-muted">
                                Dernière mise à jour: {{ $shutter->updated_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 