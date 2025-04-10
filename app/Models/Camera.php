<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'room_name', 'is_on', 'battery_level'];
} 