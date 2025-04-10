@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestion</h1>
    <div class="row">
        @foreach($items as $item)
        <div class="col-md-4 mb-4">
            <a href="{{ route($item['route']) }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['description'] }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection 