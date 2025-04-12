@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @auth
        @if(auth()->user()->role === 'admin' || auth()->user()->role === 'professeur')
            <div class="mb-8">
                <a href="{{ route('information.events.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ajouter un événement
                </a>
            </div>
        @endif
    @endauth

    <!-- Actualités -->
    <div class="mb-12">
        <h2 class="text-3xl font-bold mb-6">Actualités</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($news as $item)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $item->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($item->description, 150) }}</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>{{ $item->start_date->format('d/m/Y') }}</span>
                            <a href="{{ route('information.events.show', $item) }}" class="text-blue-500 hover:text-blue-700">
                                Lire la suite
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">Aucune actualité pour le moment.</p>
            @endforelse
        </div>
    </div>

    <!-- Événements -->
    <div>
        <h2 class="text-3xl font-bold mb-6">Événements à venir</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($events as $event)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $event->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($event->description, 150) }}</p>
                        <div class="text-sm text-gray-500 mb-4">
                            <p><strong>Date:</strong> {{ $event->start_date->format('d/m/Y H:i') }}</p>
                            @if($event->location)
                                <p><strong>Lieu:</strong> {{ $event->location }}</p>
                            @endif
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('information.events.show', $event) }}" class="text-blue-500 hover:text-blue-700">
                                Plus de détails
                            </a>
                            @auth
                                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'professeur')
                                    <div class="flex space-x-2">
                                        <a href="{{ route('information.events.edit', $event) }}" class="text-yellow-500 hover:text-yellow-700">
                                            Modifier
                                        </a>
                                        <form action="{{ route('information.events.destroy', $event) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">Aucun événement à venir.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection 