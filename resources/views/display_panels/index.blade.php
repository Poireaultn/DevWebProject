@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestion des panneaux d'affichage</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($panels as $panel)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $panel->name }}</h5>
                        <p class="card-text">
                            <strong>Salle:</strong> {{ $panel->room }}<br>
                            <strong>Statut:</strong> 
                            <span class="badge {{ $panel->status === 'on' ? 'bg-success' : 'bg-danger' }}">
                                {{ $panel->status }}
                            </span><br>
                            <strong>Contenu:</strong> {{ $panel->content }}
                        </p>
                        <form action="{{ route('display_panels.update', $panel) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="status" class="form-label">Statut</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="on" {{ $panel->status === 'on' ? 'selected' : '' }}>Allumé</option>
                                    <option value="off" {{ $panel->status === 'off' ? 'selected' : '' }}>Éteint</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Contenu</label>
                                <textarea name="content" id="content" class="form-control" rows="3">{{ $panel->content }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 