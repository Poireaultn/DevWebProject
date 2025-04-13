@extends('layouts.app')

@section('title', 'Administration - Statistiques')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold">Statistiques du système</h1>
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:text-blue-800">
            Retour au tableau de bord
        </a>
    </div>

    <!-- Consommation énergétique -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-6">Consommation énergétique</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Consommation totale</h3>
                <p class="text-3xl font-bold text-blue-600">{{ number_format($energyStats['total_consumption'], 2) }} kWh</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Moyenne mensuelle</h3>
                <p class="text-3xl font-bold text-green-600">{{ number_format($energyStats['monthly_average'], 2) }} kWh</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Tendance</h3>
                <div class="flex items-center">
                    @if(isset($energyStats['trend']) && $energyStats['trend'] > 0)
                        <span class="text-red-600">↑ +{{ number_format($energyStats['trend'], 1) }}%</span>
                    @else
                        <span class="text-green-600">↓ {{ number_format($energyStats['trend'], 1) }}%</span>
                    @endif
                    <span class="text-sm text-gray-500 ml-2">vs mois précédent</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Activité des utilisateurs -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-6">Activité des utilisateurs</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Connexions totales</h3>
                <p class="text-3xl font-bold text-blue-600">{{ $userStats['total_logins'] }}</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Utilisateurs actifs</h3>
                <p class="text-3xl font-bold text-green-600">{{ $userStats['active_users'] }}</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Nouveaux utilisateurs</h3>
                <p class="text-3xl font-bold text-purple-600">{{ $userStats['new_users'] }}</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Taux d'activité</h3>
                <p class="text-3xl font-bold text-orange-600">
                    {{ number_format(($userStats['active_users'] / max($userStats['total_users'], 1)) * 100, 1) }}%
                </p>
            </div>
        </div>
    </div>

    <!-- Services les plus utilisés -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-6">Services les plus utilisés</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisations</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">% du total</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tendance</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($serviceStats as $service)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $service->service_name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ number_format($service->total_uses) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                {{ number_format(($service->total_uses / max($serviceStats->sum('total_uses'), 1)) * 100, 1) }}%
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if(isset($service->trend))
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                    {{ $service->trend >= 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $service->trend >= 0 ? '↑' : '↓' }} {{ abs($service->trend) }}%
                                </span>
                            @else
                                <span class="text-gray-500">-</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ici, vous pouvez ajouter des graphiques Chart.js pour visualiser les données
    // Par exemple, un graphique de la consommation énergétique sur les derniers mois
    // ou un graphique des connexions utilisateurs au fil du temps
</script>
@endpush
@endsection 