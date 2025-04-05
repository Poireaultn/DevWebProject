<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Light extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'room', 'is_on'];
}
