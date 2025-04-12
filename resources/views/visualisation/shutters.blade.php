@extends('layouts.app')

@section('title', 'Visualisation des Volets')

@section('content')
<div class="container">
    <h2>État des Volets</h2>

    <div class="row">
        @foreach($shutters as $shutter)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $shutter->name }}</h5>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $shutter->is_open ? 'bg-success' : 'bg-danger' }}">
                            {{ $shutter->is_open ? 'Ouvert' : 'Fermé' }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-3">
        <a href="{{ route('visualisation.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>
@endsection 