<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BikeParking extends Model
{
    protected $fillable = [
        'name',
        'total_spots',
        'available_spots',
        'is_open'
    ];

    protected $casts = [
        'is_open' => 'boolean'
    ];

    public function updateAvailability()
    {
        $hour = now()->hour;
        $isDayTime = $hour >= 8 && $hour < 18;
        
        if ($isDayTime) {
            // 15% de places disponibles en journée (85% occupées)
            $this->available_spots = floor($this->total_spots * 0.15);
        } else {
            // 70% de places disponibles en dehors des heures d'ouverture (30% occupées)
            $this->available_spots = floor($this->total_spots * 0.70);
        }
        
        $this->save();
    }
} 