<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmokeDetector extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'room_name',
        'is_active',
        'smoke_detected'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'smoke_detected' => 'boolean'
    ];
} 