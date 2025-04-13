@extends('layouts.app')

@section('title', 'Administration - Journal des actions')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold">Journal des actions</h1>
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:text-blue-800">
            Retour au tableau de bord
        </a>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <form action="{{ route('admin.history.actions') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label for="user" class="block text-sm font-medium text-gray-700 mb-2">Utilisateur</label>
                <select name="user" id="user" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200">
                    <option value="">Tous les utilisateurs</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ request('user') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="action" class="block text-sm font-medium text-gray-700 mb-2">Type d'action</label>
                <select name="action" id="action" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200">
                    <option value="">Toutes les actions</option>
                    <option value="create" {{ request('action') == 'create' ? 'selected' : '' }}>Création</option>
                    <option value="update" {{ request('action') == 'update' ? 'selected' : '' }}>Modification</option>
                    <option value="delete" {{ request('action') == 'delete' ? 'selected' : '' }}>Suppression</option>
                </select>
            </div>
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                <input type="date" name="date" id="date" value="{{ request('date') }}"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200">
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Filtrer
                </button>
            </div>
        </form>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($logs as $log)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $log->created_at->format('d/m/Y H:i:s') }}</div>
                        <div class="text-xs text-gray-400">{{ $log->created_at->diffForHumans() }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $log->user->name }}</div>
                        <div class="text-xs text-gray-500">{{ $log->user->email }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            @if($log->action_type === 'create') bg-green-100 text-green-800
                            @elseif($log->action_type === 'update') bg-blue-100 text-blue-800
                            @elseif($log->action_type === 'delete') bg-red-100 text-red-800
                            @else bg-gray-100 text-gray-800 @endif">
                            {{ ucfirst($log->action_type) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">{{ $log->description }}</div>
                        @if($log->details)
                            <div class="text-xs text-gray-500 mt-1">
                                {{ json_encode($log->details) }}
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $log->ip_address }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $logs->withQueryString()->links() }}
    </div>

    <!-- Résumé des actions -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Actions aujourd'hui</h3>
            <p class="text-3xl font-bold text-blue-600">
                {{ $logs->where('created_at', '>=', \Carbon\Carbon::today())->count() }}
            </p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Créations</h3>
            <p class="text-3xl font-bold text-green-600">
                {{ $logs->where('action_type', 'create')->count() }}
            </p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Modifications</h3>
            <p class="text-3xl font-bold text-blue-600">
                {{ $logs->where('action_type', 'update')->count() }}
            </p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Suppressions</h3>
            <p class="text-3xl font-bold text-red-600">
                {{ $logs->where('action_type', 'delete')->count() }}
            </p>
        </div>
    </div>
</div>
@endsection 