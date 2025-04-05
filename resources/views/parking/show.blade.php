@extends('layouts.app')

@section('title', 'État du Parking')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">État du Parking</h5>
                    <span class="badge {{ $parking->is_open ? 'bg-success' : 'bg-danger' }}">
                        {{ $parking->is_open ? 'Ouvert' : 'Fermé' }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Capacité totale</h6>
                            <p class="lead">{{ $parking->total_spots }} places</p>
                            <h6 class="mt-3">Places handicapées</h6>
                            <p class="lead">{{ $parking->handicap_spots }} places</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Places standards disponibles</h6>
                            <p class="lead">{{ $parking->available_spots }} places</p>
                            <h6 class="mt-3">Places handicapées disponibles</h6>
                            <p class="lead">{{ $parking->available_handicap_spots }} places</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6>Taux d'occupation - Places standards</h6>
                        <div class="progress mb-3">
                            @php
                                $standardOccupancyRate = (($parking->total_spots - $parking->handicap_spots - $parking->available_spots) / ($parking->total_spots - $parking->handicap_spots)) * 100;
                            @endphp
                            <div class="progress-bar {{ $standardOccupancyRate > 90 ? 'bg-danger' : ($standardOccupancyRate > 70 ? 'bg-warning' : 'bg-success') }}"
                                 role="progressbar"
                                 style="width: {{ $standardOccupancyRate }}%"
                                 aria-valuenow="{{ $standardOccupancyRate }}"
                                 aria-valuemin="0"
                                 aria-valuemax="100">
                                {{ round($standardOccupancyRate) }}% occupé
                            </div>
                        </div>

                        <h6>Taux d'occupation - Places handicapées</h6>
                        <div class="progress">
                            @php
                                $handicapOccupancyRate = (($parking->handicap_spots - $parking->available_handicap_spots) / $parking->handicap_spots) * 100;
                            @endphp
                            <div class="progress-bar {{ $handicapOccupancyRate > 90 ? 'bg-danger' : ($handicapOccupancyRate > 70 ? 'bg-warning' : 'bg-success') }}"
                                 role="progressbar"
                                 style="width: {{ $handicapOccupancyRate }}%"
                                 aria-valuenow="{{ $handicapOccupancyRate }}"
                                 aria-valuemin="0"
                                 aria-valuemax="100">
                                {{ round($handicapOccupancyRate) }}% occupé
                            </div>
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