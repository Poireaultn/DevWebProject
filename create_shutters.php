<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Shutter;

$shutters = [
    // Salles de classe
    ['name' => 'Volet Salle 101', 'room_name' => 'Salle 101'],
    ['name' => 'Volet Salle 102', 'room_name' => 'Salle 102'],
    ['name' => 'Volet Salle 103', 'room_name' => 'Salle 103'],
    ['name' => 'Volet Salle 104', 'room_name' => 'Salle 104'],
    ['name' => 'Volet Salle 105', 'room_name' => 'Salle 105'],
    ['name' => 'Volet Salle 201', 'room_name' => 'Salle 201'],
    ['name' => 'Volet Salle 202', 'room_name' => 'Salle 202'],
    ['name' => 'Volet Salle 203', 'room_name' => 'Salle 203'],
    ['name' => 'Volet Salle 204', 'room_name' => 'Salle 204'],
    ['name' => 'Volet Salle 205', 'room_name' => 'Salle 205'],
    // Autres salles
    ['name' => 'Volet Salle des Professeurs', 'room_name' => 'Salle des Professeurs'],
    ['name' => 'Volet Bureau Professeur 1', 'room_name' => 'Bureau Professeur 1'],
    ['name' => 'Volet Bureau Professeur 2', 'room_name' => 'Bureau Professeur 2'],
    ['name' => 'Volet Salle de Stockage', 'room_name' => 'Salle de Stockage'],
    ['name' => 'Volet Salle des Associations', 'room_name' => 'Salle des Associations']
];

foreach ($shutters as $shutter) {
    Shutter::create($shutter);
}

echo "Volets créés avec succès !\n"; 