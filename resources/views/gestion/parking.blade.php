@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestion du Parking</h1>
    <div class="row">
        @foreach($parking as $place)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Place {{ $place->id }}</h5>
                    <p class="card-text">Statut : {{ $place->is_open ? 'Ouvert' : 'Fermé' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 