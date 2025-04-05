@extends('layouts.app')

@section('content')
<div class="container">
    <h2>État des Lumières</h2>

    <div class="row">
        @foreach($lights as $light)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $light->room_name }}</h5>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $light->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $light->is_on ? 'Allumée' : 'Éteinte' }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 