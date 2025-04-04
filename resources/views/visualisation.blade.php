@extends('layouts.app')

@section('title', 'Visualisation')

@section('content')
<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h2 class="mb-0">Visualisation</h2>
    </div>
    <div class="card-body">
        <h3>Section Visualisation</h3>
        <p>Explorez nos données sous forme visuelle.</p>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Graphiques</h4>
                        <p>Visualisez nos données sous forme de graphiques.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Tableaux</h4>
                        <p>Consultez nos données sous forme de tableaux.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 