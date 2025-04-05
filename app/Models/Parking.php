<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = [
        'name',
        'total_spots',
        'handicap_spots',
        'available_spots',
        'available_handicap_spots',
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
            // 10% de places disponibles en journée
            $this->available_spots = floor(($this->total_spots - $this->handicap_spots) * 0.1);
            $this->available_handicap_spots = floor($this->handicap_spots * 0.1);
        } else {
            // 90% de places disponibles en dehors des heures d'ouverture
            $this->available_spots = floor(($this->total_spots - $this->handicap_spots) * 0.9);
            $this->available_handicap_spots = floor($this->handicap_spots * 0.9);
        }
        
        $this->save();
    }
} 