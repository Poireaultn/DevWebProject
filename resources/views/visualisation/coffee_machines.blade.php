@extends('layouts.app')

@section('content')
<div class="container">
    <h2>État des Distributeurs de Café</h2>

    <div class="row">
        @foreach($coffeeMachines as $machine)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $machine->name }}</h5>
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

    <div class="mt-3">
        <a href="{{ route('visualisation.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>
@endsection 