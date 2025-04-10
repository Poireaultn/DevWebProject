<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CoffeeMachine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'room_name', 'is_on', 'products'];

    protected $casts = [
        'is_on' => 'boolean',
        'products' => 'array'
    ];
} 