<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\DisplayPanel;

$displayPanels = [
    // Salles de classe
    ['name' => 'Panneau Salle 101', 'room' => 'Salle 101', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 102', 'room' => 'Salle 102', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 103', 'room' => 'Salle 103', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 104', 'room' => 'Salle 104', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 105', 'room' => 'Salle 105', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 201', 'room' => 'Salle 201', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 202', 'room' => 'Salle 202', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 203', 'room' => 'Salle 203', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 204', 'room' => 'Salle 204', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle 205', 'room' => 'Salle 205', 'status' => 'on', 'content' => ''],
    // Autres salles
    ['name' => 'Panneau Salle des Professeurs', 'room' => 'Salle des Professeurs', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Bureau Professeur 1', 'room' => 'Bureau Professeur 1', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Bureau Professeur 2', 'room' => 'Bureau Professeur 2', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Salle des Associations', 'room' => 'Salle des Associations', 'status' => 'on', 'content' => ''],
    ['name' => 'Panneau Hall', 'room' => 'Hall', 'status' => 'on', 'content' => '']
];

foreach ($displayPanels as $panel) {
    DisplayPanel::create($panel);
}

echo "Panneaux d'affichage créés avec succès !\n"; 