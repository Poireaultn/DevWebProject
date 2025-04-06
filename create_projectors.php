<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

use App\Models\Projector;

$rooms = ['Salle 101', 'Salle 102', 'Salle 103', 'Salle 104', 'Salle 105'];

foreach ($rooms as $room) {
    Projector::create([
        'name' => 'Projecteur ' . $room,
        'room_name' => $room,
        'is_on' => false,
        'source' => 'HDMI1',
        'brightness' => 50
    ]);
}

echo "Vidéoprojecteurs créés avec succès.\n"; 