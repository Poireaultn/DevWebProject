<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Shutter;

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
    ['name' => 'Volet Bureau Professeur 1'],
    ['name' => 'Volet Bureau Professeur 2'],
    ['name' => 'Volet Salle de Stockage'],
    ['name' => 'Volet Salle des Associations']
];

foreach ($shutters as $shutter) {
    Shutter::create($shutter);
}

echo "Volets créés avec succès !\n"; 