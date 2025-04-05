<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'subject',
        'teacher',
        'start_time',
        'end_time'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    public static $subjects = [
        'Mathématiques' => 'Romain Dujol',
        'Français' => 'Caroline Meunier',
        'Physique' => 'Paul Fruton',
        'Philosophie' => 'Bénédicte Horlait',
        'Chimie' => 'Lucie Desplat',
        'SVT' => 'Thibaut Modeste',
        'Histoire-Géographie' => 'Napoleon Bonaparte',
        'Sport' => 'Boris Labrador',
        'Informatique' => 'Inès de Courchelle'
    ];
}
