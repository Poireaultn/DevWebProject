<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Shutter;

$shutters = [
    ['name' => 'Volet Salon'],
    ['name' => 'Volet Chambre'],
    ['name' => 'Volet Cuisine']
];

foreach ($shutters as $shutter) {
    Shutter::create($shutter);
}

echo "Volets créés avec succès !\n"; 