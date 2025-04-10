@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Distributeurs de Café</h2>
    <div class="row">
        @foreach($coffeeMachines as $machine)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ $machine->name }}</h5>
                </div>
                <div class="card-body">
                    <h6 class="mb-3">Salle: {{ $machine->room_name }}</h6>
                    <p class="card-text">
                        État: 
                        <span class="badge {{ $machine->is_on ? 'bg-success' : 'bg-danger' }}">
                            {{ $machine->is_on ? 'En service' : 'Hors service' }}
                        </span>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Disponibilité</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($machine->products as $name => $details)
                                <tr>
                                    <td>{{ ucwords(str_replace('_', ' ', $name)) }}</td>
                                    <td>{{ number_format($details['price'], 2) }} €</td>
                                    <td>
                                        @if($details['quantity'] > 20)
                                            <span class="badge bg-success">Disponible</span>
                                        @elseif($details['quantity'] > 0)
                                            <span class="badge bg-warning">Stock faible</span>
                                        @else
                                            <span class="badge bg-danger">Épuisé</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 