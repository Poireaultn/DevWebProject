<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\DisplayPanel;

// Récupérer tous les panneaux d'affichage
$panels = DisplayPanel::all();

foreach ($panels as $panel) {
    // Mettre à jour le statut (on/off) de manière aléatoire
    $newStatus = rand(0, 1) ? 'on' : 'off';
    
    // Mettre à jour le contenu avec un message aléatoire
    $messages = [
        "Bienvenue dans la salle {$panel->room}",
        "Prochain cours dans 10 minutes",
        "Réunion prévue à 14h",
        "Maintenance prévue demain",
        "Salle réservée pour l'événement",
        "Veuillez éteindre les lumières en partant"
    ];
    
    $newContent = $messages[array_rand($messages)];
    
    // Mettre à jour le panneau
    $panel->update([
        'status' => $newStatus,
        'content' => $newContent
    ]);
}

echo "Panneaux d'affichage mis à jour avec succès !\n"; 