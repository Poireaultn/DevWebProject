<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Heater;

$heaters = [
    // Salles de classe
    ['name' => 'Chauffage Salle 101'],
    ['name' => 'Chauffage Salle 102'],
    ['name' => 'Chauffage Salle 103'],
    ['name' => 'Chauffage Salle 104'],
    ['name' => 'Chauffage Salle 105'],
    ['name' => 'Chauffage Salle 201'],
    ['name' => 'Chauffage Salle 202'],
    ['name' => 'Chauffage Salle 203'],
    ['name' => 'Chauffage Salle 204'],
    ['name' => 'Chauffage Salle 205'],
    // Autres salles
    ['name' => 'Chauffage Salle des Professeurs'],
    ['name' => 'Chauffage Salle de Stockage'],
    ['name' => 'Chauffage Salle des Associations']
];

foreach ($heaters as $heater) {
    Heater::create($heater);
}

echo "Chauffages créés avec succès !\n"; 