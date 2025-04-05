<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Light;

$lights = [
    // Salles de classe
    ['name' => 'Lumière Salle 101', 'room' => 'Salle 101'],
    ['name' => 'Lumière Salle 102', 'room' => 'Salle 102'],
    ['name' => 'Lumière Salle 103', 'room' => 'Salle 103'],
    ['name' => 'Lumière Salle 104', 'room' => 'Salle 104'],
    ['name' => 'Lumière Salle 105', 'room' => 'Salle 105'],
    ['name' => 'Lumière Salle 201', 'room' => 'Salle 201'],
    ['name' => 'Lumière Salle 202', 'room' => 'Salle 202'],
    ['name' => 'Lumière Salle 203', 'room' => 'Salle 203'],
    ['name' => 'Lumière Salle 204', 'room' => 'Salle 204'],
    ['name' => 'Lumière Salle 205', 'room' => 'Salle 205'],
    // Autres salles
    ['name' => 'Lumière Salle des Professeurs', 'room' => 'Salle des Professeurs'],
    ['name' => 'Lumière Bureau Professeur 1', 'room' => 'Bureau Professeur 1'],
    ['name' => 'Lumière Bureau Professeur 2', 'room' => 'Bureau Professeur 2'],
    ['name' => 'Lumière Salle de Stockage', 'room' => 'Salle de Stockage'],
    ['name' => 'Lumière Salle des Associations', 'room' => 'Salle des Associations'],
    ['name' => 'Lumière Hall', 'room' => 'Hall']
];

foreach ($lights as $light) {
    Light::create($light);
}

echo "Lumières créées avec succès !\n"; 