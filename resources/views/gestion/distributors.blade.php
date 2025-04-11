@extends('layouts.app')

@section('title', 'Gestion des Distributeurs')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestion des Distributeurs</h1>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">État des Distributeurs</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Localisation</th>
                                    <th>État</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hall Principal</td>
                                    <td><span class="badge bg-success">En service</span></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Mettre hors service</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cafétéria</td>
                                    <td><span class="badge bg-success">En service</span></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Mettre hors service</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 