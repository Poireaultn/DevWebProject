<?php

namespace Database\Seeders;

use App\Models\RoomOccupancy;
use Illuminate\Database\Seeder;

class RoomOccupancySeeder extends Seeder
{
    public function run()
    {
        $rooms = [
            // Salles de classe
            ['name' => 'PAU E109', 'type' => 'Salle de classe'],
            ['name' => 'PAU E209', 'type' => 'Salle de classe'],
            ['name' => 'PAU E309', 'type' => 'Salle de classe'],
            ['name' => 'PAU E409', 'type' => 'Salle de classe'],
            ['name' => 'PAU E509', 'type' => 'Salle de classe'],
            
            // Bureaux des professeurs
            ['name' => 'Bureau FASSI DIEUDONNE', 'type' => 'Bureau'],
            ['name' => 'Bureau DECOURCHELLE INES', 'type' => 'Bureau'],
            
            // Espaces communs
            ['name' => 'Hall Principal', 'type' => 'Espace commun'],
            ['name' => 'Salle des Associations', 'type' => 'Espace commun'],
            ['name' => 'Cafétéria', 'type' => 'Espace commun'],
            ['name' => 'Bibliothèque', 'type' => 'Espace commun'],
            ['name' => 'Laboratoire de Sciences', 'type' => 'Laboratoire'],
            ['name' => 'Salle Informatique', 'type' => 'Salle spécialisée'],
            ['name' => 'Gymnase', 'type' => 'Salle de sport']
        ];

        foreach ($rooms as $room) {
            RoomOccupancy::create([
                'room_name' => $room['name'],
                'room_type' => $room['type'],
                'people_count' => 0
            ]);
        }
    }
} 