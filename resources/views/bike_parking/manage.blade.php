@extends('layouts.app')

@section('title', 'Gestion du Parking à Vélos')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Gestion du Parking à Vélos</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Capacité totale</h6>
                            <p class="lead">{{ $bikeParking->total_spots }} places</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Places disponibles</h6>
                            <p class="lead">{{ $bikeParking->available_spots }} places</p>
                        </div>
                    </div>

                    <div class="progress mb-4">
                        @php
                            $occupancyRate = (($bikeParking->total_spots - $bikeParking->available_spots) / $bikeParking->total_spots) * 100;
                        @endphp
                        <div class="progress-bar {{ $occupancyRate > 90 ? 'bg-danger' : ($occupancyRate > 70 ? 'bg-warning' : 'bg-success') }}"
                             role="progressbar"
                             style="width: {{ $occupancyRate }}%"
                             aria-valuenow="{{ $occupancyRate }}"
                             aria-valuemin="0"
                             aria-valuemax="100">
                            {{ round($occupancyRate) }}% occupé
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Statut actuel</h6>
                            <span class="badge {{ $bikeParking->is_open ? 'bg-success' : 'bg-danger' }} fs-6">
                                {{ $bikeParking->is_open ? 'Ouvert' : 'Fermé' }}
                            </span>
                        </div>
                        <form action="{{ route('bike_parking.toggle') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn {{ $bikeParking->is_open ? 'btn-danger' : 'btn-success' }}">
                                {{ $bikeParking->is_open ? 'Fermer le parking' : 'Ouvrir le parking' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('gestion') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection 