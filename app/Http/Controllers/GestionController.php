<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GestionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if ($user->role === 'admin') {
            return view('gestion.index', [
                'showParking' => true,
                'showBikeParking' => true,
                'showProjector' => true,
                'showRoom' => true,
                'showDistributor' => true,
                'showCoffee' => true,
                'showCameras' => true,
                'showSmokeDetectors' => true,
                'showDisplayPanels' => true,
                'showBlinds' => true,
                'showLights' => true,
                'showHeating' => true,
                'isAdmin' => true
            ]);
        }
        elseif ($user->role === 'etudiant') {
            return view('gestion.index', [
                'showParking' => true,
                'showBikeParking' => true,
                'showProjector' => true,
                'showRoom' => true,
                'showDistributor' => false,
                'showCoffee' => false,
                'showCameras' => false,
                'showSmokeDetectors' => false,
                'showDisplayPanels' => false,
                'showBlinds' => false,
                'showLights' => false,
                'showHeating' => false,
                'isAdmin' => false
            ]);
        }
        
        // Pour les professeurs
        return view('gestion.index', [
            'showParking' => true,
            'showBikeParking' => true,
            'showProjector' => true,
            'showRoom' => true,
            'showDistributor' => true,
            'showCoffee' => true,
            'showCameras' => false,
            'showSmokeDetectors' => false,
            'showDisplayPanels' => false,
            'showBlinds' => false,
            'showLights' => false,
            'showHeating' => false,
            'isAdmin' => false
        ]);
    }
} 