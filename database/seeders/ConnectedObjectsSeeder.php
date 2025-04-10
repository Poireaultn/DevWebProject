<?php

namespace Database\Seeders;

use App\Models\Light;
use App\Models\Heater;
use App\Models\Shutter;
use App\Models\RoomOccupancy;
use App\Models\DisplayPanel;
use App\Models\SmokeDetector;
use App\Models\Projector;
use App\Models\Camera;
use App\Models\CoffeeMachine;
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
                'room_name' => $room->room_name,
                'is_on' => false
            ]);

            // Création des volets
            Shutter::create([
                'name' => 'Volet ' . $room->room_name,
                'room_name' => $room->room_name,
                'is_open' => false
            ]);

            // Création des panneaux d'affichage
            DisplayPanel::create([
                'name' => 'Panneau ' . $room->room_name,
                'room' => $room->room_name,
                'status' => 'off',
                'content' => 'Bienvenue dans la salle ' . $room->room_name
            ]);

            // Création des détecteurs de fumée
            SmokeDetector::create([
                'name' => 'Détecteur ' . $room->room_name,
                'room_name' => $room->room_name,
                'is_active' => true,
                'smoke_detected' => false
            ]);

            // Création des vidéoprojecteurs
            Projector::create([
                'name' => 'Projecteur ' . $room->room_name,
                'room_name' => $room->room_name,
                'is_on' => false,
                'source' => 'HDMI1',
                'brightness' => 50
            ]);

            // Création des caméras
            Camera::create([
                'name' => 'Caméra ' . $room->room_name,
                'room_name' => $room->room_name,
                'is_on' => false,
                'battery_level' => rand(20, 100)
            ]);
        }

        // Création des distributeurs de café (seulement dans le hall)
        CoffeeMachine::create([
            'name' => 'Distributeur Hall Principal 1',
            'room_name' => 'Hall Principal',
            'is_on' => true,
            'products' => [
                'expresso' => ['price' => 1.00, 'quantity' => rand(50, 100)],
                'double_expresso' => ['price' => 1.50, 'quantity' => rand(50, 100)],
                'cafe_noisette' => ['price' => 1.20, 'quantity' => rand(50, 100)],
                'cafe_latte' => ['price' => 1.80, 'quantity' => rand(50, 100)],
                'cafe_caramel' => ['price' => 2.00, 'quantity' => rand(50, 100)]
            ]
        ]);

        CoffeeMachine::create([
            'name' => 'Distributeur Hall Principal 2',
            'room_name' => 'Hall Principal',
            'is_on' => true,
            'products' => [
                'expresso' => ['price' => 1.00, 'quantity' => rand(50, 100)],
                'double_expresso' => ['price' => 1.50, 'quantity' => rand(50, 100)],
                'cafe_noisette' => ['price' => 1.20, 'quantity' => rand(50, 100)],
                'cafe_latte' => ['price' => 1.80, 'quantity' => rand(50, 100)],
                'cafe_caramel' => ['price' => 2.00, 'quantity' => rand(50, 100)]
            ]
        ]);
    }
} 