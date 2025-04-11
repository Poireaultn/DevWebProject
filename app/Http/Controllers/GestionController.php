<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GestionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if ($user->role === 'etudiant') {
            return view('gestion.index', [
                'showParking' => true,
                'showBikeParking' => true,
                'showProjector' => true,
                'showRoom' => true,
                'showDistributor' => false,
                'showCoffee' => false
            ]);
        }
        
        // Pour les professeurs, tout est visible
        return view('gestion.index', [
            'showParking' => true,
            'showBikeParking' => true,
            'showProjector' => true,
            'showRoom' => true,
            'showDistributor' => true,
            'showCoffee' => true
        ]);
    }
} 