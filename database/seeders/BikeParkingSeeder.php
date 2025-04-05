<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BikeParking;

class BikeParkingSeeder extends Seeder
{
    public function run()
    {
        BikeParking::create([
            'name' => 'Parking Vélos',
            'total_spots' => 30,
            'available_spots' => 21,
            'is_open' => true
        ]);
    }
} 