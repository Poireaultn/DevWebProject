@extends('layouts.app')

@section('title', 'Parking à Vélos')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">État du Parking à Vélos</h5>
                    <span class="badge {{ $bikeParking->is_open ? 'bg-success' : 'bg-danger' }}">
                        {{ $bikeParking->is_open ? 'Ouvert' : 'Fermé' }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Capacité totale</h6>
                            <p class="lead">{{ $bikeParking->total_spots }} places</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Places disponibles</h6>
                            <p class="lead">{{ $bikeParking->available_spots }} places</p>
                        </div>
                    </div>
                    <div class="progress mt-3">
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
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('visualisation') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection 