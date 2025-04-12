@extends('layouts.app')

@section('title', 'Gestion des Volets')

@section('content')
<div class="container">
    <h2>Gestion des Volets</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        @foreach($shutters as $shutter)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $shutter->room_name }}</h5>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $shutter->is_open ? 'bg-success' : 'bg-danger' }}">
                            {{ $shutter->is_open ? 'Ouvert' : 'Fermé' }}
                        </span>
                    </p>
                    <form action="{{ route('shutters.toggle', $shutter) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn {{ $shutter->is_open ? 'btn-danger' : 'btn-success' }}">
                            {{ $shutter->is_open ? 'Fermer' : 'Ouvrir' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-3">
        <a href="{{ route('gestion.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>
@endsection 