<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Shutter;

// Supprimer tous les volets existants
Shutter::truncate();

// Créer les nouveaux volets
$shutters = [
    // Salles de classe
    ['name' => 'Volet Salle 101'],
    ['name' => 'Volet Salle 102'],
    ['name' => 'Volet Salle 103'],
    ['name' => 'Volet Salle 104'],
    ['name' => 'Volet Salle 105'],
    ['name' => 'Volet Salle 201'],
    ['name' => 'Volet Salle 202'],
    ['name' => 'Volet Salle 203'],
    ['name' => 'Volet Salle 204'],
    ['name' => 'Volet Salle 205'],
    // Autres salles
    ['name' => 'Volet Salle des Professeurs'],
    ['name' => 'Volet Salle de Stockage'],
    ['name' => 'Volet Salle des Associations']
];

foreach ($shutters as $shutter) {
    Shutter::create($shutter);
}

echo "Volets mis à jour avec succès !\n"; 