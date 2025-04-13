@extends('layouts.app')

@section('title', 'Administration')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Administration</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Gestion des utilisateurs -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Gestion des utilisateurs</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">→ Ajouter un utilisateur</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Liste des utilisateurs</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Gestion des niveaux d'accès</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Historique des connexions</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Journal des actions</a></li>
            </ul>
        </div>

        <!-- Gestion du catalogue -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Gestion du catalogue</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">→ Gérer les catégories</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Ajouter une catégorie</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Gérer les objets</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Gérer les services</a></li>
            </ul>
        </div>

        <!-- Sécurité et maintenance -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Sécurité et maintenance</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">→ Modifier le mot de passe admin</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Sauvegarder la base de données</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Vérifier l'intégrité des données</a></li>
            </ul>
        </div>

        <!-- Personnalisation -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Personnalisation</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">→ Modifier l'apparence des modules</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Configurer la structure</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Règles de validation</a></li>
            </ul>
        </div>

        <!-- Statistiques -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Statistiques</h2>
            <div class="space-y-4">
                <div class="border-b pb-2">
                    <h3 class="font-medium mb-1">Consommation énergétique</h3>
                    <p class="text-2xl font-bold text-green-600">2,145 kWh</p>
                    <p class="text-sm text-gray-500">Moyenne mensuelle</p>
                </div>
                <div class="border-b pb-2">
                    <h3 class="font-medium mb-1">Taux de connexion</h3>
                    <p class="text-2xl font-bold text-blue-600">78%</p>
                    <p class="text-sm text-gray-500">Utilisateurs actifs ce mois</p>
                </div>
                <div>
                    <h3 class="font-medium mb-1">Services les plus utilisés</h3>
                    <ol class="list-decimal list-inside text-gray-600">
                        <li>Réservation de salles (45%)</li>
                        <li>Gestion des lumières (30%)</li>
                        <li>Contrôle du chauffage (25%)</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Configuration système -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Configuration système</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-blue-600 hover:underline">→ Paramètres généraux</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Règles d'inscription</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Validation des comptes</a></li>
                <li><a href="#" class="text-blue-600 hover:underline">→ Notifications système</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal de confirmation -->
<div id="confirmationModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmation</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500">Êtes-vous sûr de vouloir effectuer cette action ?</p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="confirmButton" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 mr-2">Confirmer</button>
                <button id="cancelButton" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Annuler</button>
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