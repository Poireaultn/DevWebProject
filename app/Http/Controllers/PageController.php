<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shutter;
use App\Models\Parking;
use App\Models\BikeParking;
use Illuminate\Support\Facades\Schema;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function information()
    {
        return view('information');
    }

    public function visualisation()
    {
        $shutters = Shutter::all();
        $parkings = collect();
        $bikeParkings = collect();
        
        if (Schema::hasTable('parkings')) {
            $parkings = Parking::all();
        }
        
        if (Schema::hasTable('bike_parkings')) {
            $bikeParkings = BikeParking::all();
        }
        
        return view('visualisation', compact('shutters', 'parkings', 'bikeParkings'));
    }

    public function gestion()
    {
        $shutters = Shutter::all();
        $parkings = collect();
        $bikeParkings = collect();
        
        if (Schema::hasTable('parkings')) {
            $parkings = Parking::all();
        }
        
        if (Schema::hasTable('bike_parkings')) {
            $bikeParkings = BikeParking::all();
        }
        
        return view('gestion', compact('shutters', 'parkings', 'bikeParkings'));
    }

    public function administration()
    {
        return view('administration');
    }
} 