<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

use App\Models\SmokeDetector;

$rooms = ['Salle 101', 'Salle 102', 'Salle 103', 'Salle 104', 'Salle 105'];

foreach ($rooms as $room) {
    SmokeDetector::create([
        'name' => 'Détecteur ' . $room,
        'room_name' => $room,
        'is_active' => true,
        'smoke_detected' => false
    ]);
}

echo "Détecteurs de fumée créés avec succès.\n"; 