<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomOccupancy extends Model
{
    use HasFactory;

    protected $fillable = ['room_name', 'people_count'];
}
