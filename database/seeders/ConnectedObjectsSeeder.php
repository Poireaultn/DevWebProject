<?php

namespace Database\Seeders;

use App\Models\Light;
use App\Models\Heater;
use App\Models\Shutter;
use App\Models\RoomOccupancy;
use Illuminate\Database\Seeder;

class ConnectedObjectsSeeder extends Seeder
{
    public function run()
    {
        // Création du chauffage central unique
        Heater::create([
            'name' => 'Chauffage Central',
            'room_name' => 'Chauffage Central',
            'is_on' => false,
            'current_temperature' => 20,
            'target_temperature' => 21,
            'mode' => 'chauffage' // Mode par défaut
        ]);

        $rooms = RoomOccupancy::all();

        foreach ($rooms as $room) {
            // Création des lumières
            Light::create([
                'name' => 'Lumière ' . $room->room_name,
                'room' => $room->room_name,
                'is_on' => false
            ]);

            // Création des volets
            Shutter::create([
                'name' => 'Volet ' . $room->room_name,
                'room_name' => $room->room_name,
                'is_open' => false
            ]);
        }
    }
} 