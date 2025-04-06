<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Heater;

$heaters = [
    ['name' => 'Chauffage Central École', 'room_name' => 'École']
];

foreach ($heaters as $heater) {
    Heater::create($heater);
}

echo "Chauffages créés avec succès !\n"; 