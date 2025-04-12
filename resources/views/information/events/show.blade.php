@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-8">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold mb-2">{{ $event->title }}</h1>
                    <div class="flex items-center text-gray-500 text-sm mb-4">
                        <span class="mr-4">{{ $event->start_date->format('d/m/Y H:i') }}</span>
                        @if($event->location)
                            <span class="mr-4">{{ $event->location }}</span>
                        @endif
                        <span class="px-2 py-1 rounded {{ $event->type === 'news' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}">
                            {{ $event->type === 'news' ? 'Actualité' : 'Événement' }}
                        </span>
                    </div>
                </div>

                <div class="prose max-w-none mb-8">
                    {!! nl2br(e($event->description)) !!}
                </div>

                @if($event->end_date)
                    <div class="text-gray-600 mb-6">
                        <p><strong>Date de fin:</strong> {{ $event->end_date->format('d/m/Y H:i') }}</p>
                    </div>
                @endif

                <div class="flex justify-between items-center">
                    <a href="{{ route('information.events.index') }}" class="text-blue-500 hover:text-blue-700">
                        &larr; Retour à la liste
                    </a>

                    @auth
                        @if(auth()->user()->hasRole(['admin', 'teacher']))
                            <div class="flex space-x-4">
                                <a href="{{ route('information.events.edit', $event) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Modifier
                                </a>
                                <form action="{{ route('information.events.destroy', $event) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 