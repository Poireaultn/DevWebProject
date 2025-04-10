<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heater extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'room_name',
        'is_on',
        'current_temperature',
        'target_temperature',
        'mode'
    ];
}
