@extends('layouts.app')

@section('title', 'Information')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h2 class="mb-0">Information</h2>
    </div>
    <div class="card-body">
        <h3>Bienvenue dans la section Information</h3>
        <p>Cette section contient des informations importantes sur notre service.</p>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>À propos de nous</h4>
                        <p>Découvrez notre histoire et notre mission.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Nos services</h4>
                        <p>Explorez la gamme de services que nous proposons.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 