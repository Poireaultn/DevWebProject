@extends('layouts.app')

@section('title', 'Administration - Gestion des catégories')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold">Gestion des catégories</h1>
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:text-blue-800">
            Retour au tableau de bord
        </a>
    </div>

    <!-- Formulaire d'ajout de catégorie -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Ajouter une catégorie</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom de la catégorie</label>
                <input type="text" name="name" id="name" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                <select name="type" id="type" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="object" {{ old('type') == 'object' ? 'selected' : '' }}>Objet</option>
                    <option value="tool" {{ old('type') == 'tool' ? 'selected' : '' }}>Outil</option>
                    <option value="service" {{ old('type') == 'service' ? 'selected' : '' }}>Service</option>
                </select>
                @error('type')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Ajouter la catégorie
                </button>
            </div>
        </form>
    </div>

    <!-- Liste des catégories -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
            <!-- Objets -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Objets</h3>
                <div class="space-y-4">
                    @foreach($categories->where('type', 'object') as $category)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-700">{{ $category->name }}</span>
                        <form action="{{ route('admin.categories.delete', $category) }}" method="POST" class="inline"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ? Cette action supprimera également tous les éléments associés.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Outils -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Outils</h3>
                <div class="space-y-4">
                    @foreach($categories->where('type', 'tool') as $category)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-700">{{ $category->name }}</span>
                        <form action="{{ route('admin.categories.delete', $category) }}" method="POST" class="inline"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ? Cette action supprimera également tous les éléments associés.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Services</h3>
                <div class="space-y-4">
                    @foreach($categories->where('type', 'service') as $category)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-700">{{ $category->name }}</span>
                        <form action="{{ route('admin.categories.delete', $category) }}" method="POST" class="inline"
                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ? Cette action supprimera également tous les éléments associés.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg" id="successMessage">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    </script>
@endif
@endsection 