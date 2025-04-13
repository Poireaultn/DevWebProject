@extends('layouts.app')

@section('title', 'Administration')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Administration</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Gestion des utilisateurs -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <h2 class="text-xl font-semibold">Gestion des utilisateurs</h2>
            </div>
            <p class="text-gray-600 mb-4">Gérez les utilisateurs, leurs rôles et leurs accès.</p>
            <div class="space-y-2">
                <a href="{{ route('admin.users') }}" class="block text-blue-600 hover:text-blue-800">→ Liste des utilisateurs</a>
                <a href="{{ route('admin.users.create') }}" class="block text-blue-600 hover:text-blue-800">→ Ajouter un utilisateur</a>
                <a href="{{ route('admin.history.logins') }}" class="block text-blue-600 hover:text-blue-800">→ Historique des connexions</a>
            </div>
        </div>

        <!-- Gestion du catalogue -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <svg class="h-6 w-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <h2 class="text-xl font-semibold">Gestion du catalogue</h2>
            </div>
            <p class="text-gray-600 mb-4">Gérez les catégories, objets et services.</p>
            <div class="space-y-2">
                <a href="{{ route('admin.categories') }}" class="block text-blue-600 hover:text-blue-800">→ Gérer les catégories</a>
                <a href="{{ route('admin.items') }}" class="block text-blue-600 hover:text-blue-800">→ Gérer les items</a>
            </div>
        </div>

        <!-- Sécurité et maintenance -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <svg class="h-6 w-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <h2 class="text-xl font-semibold">Sécurité et maintenance</h2>
            </div>
            <p class="text-gray-600 mb-4">Gérez la sécurité et la maintenance du système.</p>
            <div class="space-y-2">
                <a href="#" onclick="document.getElementById('passwordModal').classList.remove('hidden')" class="block text-blue-600 hover:text-blue-800">→ Modifier le mot de passe admin</a>
                <form action="{{ route('admin.maintenance.backup') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-blue-600 hover:text-blue-800">→ Sauvegarder la base de données</button>
                </form>
                <a href="{{ route('admin.maintenance.integrity') }}" class="block text-blue-600 hover:text-blue-800">→ Vérifier l'intégrité des données</a>
            </div>
        </div>

        <!-- Statistiques et rapports -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <svg class="h-6 w-6 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <h2 class="text-xl font-semibold">Statistiques et rapports</h2>
            </div>
            <p class="text-gray-600 mb-4">Consultez les statistiques et générez des rapports.</p>
            <div class="space-y-2">
                <a href="{{ route('admin.statistics') }}" class="block text-blue-600 hover:text-blue-800">→ Voir les statistiques détaillées</a>
                <a href="{{ route('admin.history.actions') }}" class="block text-blue-600 hover:text-blue-800">→ Journal des actions</a>
            </div>
        </div>

        <!-- Configuration système -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center mb-4">
                <svg class="h-6 w-6 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <h2 class="text-xl font-semibold">Configuration système</h2>
            </div>
            <p class="text-gray-600 mb-4">Configurez les paramètres du système.</p>
            <div class="space-y-2">
                <a href="#" class="block text-blue-600 hover:text-blue-800">→ Paramètres généraux</a>
                <a href="#" class="block text-blue-600 hover:text-blue-800">→ Configuration des notifications</a>
                <a href="#" class="block text-blue-600 hover:text-blue-800">→ Règles de validation</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal changement de mot de passe -->
<div id="passwordModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Modifier le mot de passe administrateur</h3>
            <form action="{{ route('admin.security.password') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Mot de passe actuel</label>
                    <input type="password" name="current_password" id="current_password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
                    <input type="password" name="new_password" id="new_password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le nouveau mot de passe</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="document.getElementById('passwordModal').classList.add('hidden')" class="bg-gray-200 px-4 py-2 rounded-md text-gray-700 hover:bg-gray-300">Annuler</button>
                    <button type="submit" class="bg-blue-600 px-4 py-2 rounded-md text-white hover:bg-blue-700">Modifier</button>
                </div>
            </form>
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