<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projector extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'room_name',
        'is_on',
        'source',
        'brightness'
    ];

    protected $casts = [
        'is_on' => 'boolean',
        'brightness' => 'integer'
    ];
} 