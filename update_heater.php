<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Heater;

// Supprimer tous les chauffages existants
Heater::truncate();

// Créer un seul chauffage pour toute l'école
Heater::create([
    'name' => 'Système de Chauffage Central',
    'is_on' => false,
    'temperature' => 20.0,
    'mode' => 'chauffage'
]);

echo "Chauffage central créé avec succès !\n"; 