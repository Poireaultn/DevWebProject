<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parking;

class ParkingSeeder extends Seeder
{
    public function run()
    {
        Parking::create([
            'name' => 'Parking Principal',
            'total_spots' => 50,
            'handicap_spots' => 4,
            'available_spots' => 45,
            'available_handicap_spots' => 3,
            'is_open' => true
        ]);
    }
} 