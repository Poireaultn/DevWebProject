@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gestion des Distributeurs de Café</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($coffeeMachines as $machine)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">{{ $machine->name }}</h5>
                    <form action="{{ route('coffee_machines.toggle', $machine) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm {{ $machine->is_on ? 'btn-danger' : 'btn-success' }}">
                            {{ $machine->is_on ? 'Désactiver' : 'Activer' }}
                        </button>
                    </form>
                </div>
                <div class="card-body">
                    <h6 class="mb-3">Salle: {{ $machine->room_name }}</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($machine->products as $name => $details)
                                <tr>
                                    <td>{{ ucwords(str_replace('_', ' ', $name)) }}</td>
                                    <td>
                                        <form action="{{ route('coffee_machines.update_product', $machine) }}" method="POST" class="row g-2">
                                            @csrf
                                            <input type="hidden" name="product" value="{{ $name }}">
                                            <div class="col-md-8">
                                                <div class="input-group input-group-sm">
                                                    <input type="number" name="price" value="{{ $details['price'] }}" 
                                                           class="form-control" step="0.10" min="0" required>
                                                    <span class="input-group-text">€</span>
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                            <div class="col-md-8">
                                                <div class="input-group input-group-sm">
                                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" 
                                                           class="form-control" min="0" required>
                                                    <span class="input-group-text">unités</span>
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Mettre à jour
                                            </button>
                                        </form>
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