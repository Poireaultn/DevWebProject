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
        if (auth()->check()) {
            return view('welcome');
        }
        return view('welcome_guest');
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
        $user = auth()->user();
        $items = [];

        if ($user->role === 'etudiant') {
            $items = [
                [
                    'title' => 'Salles de Classe',
                    'route' => 'rooms.index',
                    'description' => 'Gérer les salles de classe'
                ],
                [
                    'title' => 'Parking Voiture',
                    'route' => 'parking.manage',
                    'description' => 'Gérer les places de parking voiture'
                ],
                [
                    'title' => 'Parking Vélo',
                    'route' => 'bike_parking.manage',
                    'description' => 'Gérer les places de parking vélo'
                ],
                [
                    'title' => 'Vidéoprojecteurs',
                    'route' => 'projectors.manage',
                    'description' => 'Gérer les vidéoprojecteurs'
                ]
            ];
        } else {
            // Pour les autres rôles, afficher tous les éléments
            $items = [
                [
                    'title' => 'Salles de Classe',
                    'route' => 'rooms.index',
                    'description' => 'Gérer les salles de classe'
                ],
                [
                    'title' => 'Parking Voiture',
                    'route' => 'parking.manage',
                    'description' => 'Gérer les places de parking voiture'
                ],
                [
                    'title' => 'Parking Vélo',
                    'route' => 'bike_parking.manage',
                    'description' => 'Gérer les places de parking vélo'
                ],
                [
                    'title' => 'Distributeurs Café',
                    'route' => 'coffee_machines.index',
                    'description' => 'Gérer les distributeurs de café'
                ],
                [
                    'title' => 'Vidéoprojecteurs',
                    'route' => 'projectors.manage',
                    'description' => 'Gérer les vidéoprojecteurs'
                ],
                [
                    'title' => 'Caméras',
                    'route' => 'cameras.index',
                    'description' => 'Gérer les caméras'
                ],
                [
                    'title' => 'Lumières',
                    'route' => 'lights.manage',
                    'description' => 'Gérer les lumières'
                ],
                [
                    'title' => 'Chauffages',
                    'route' => 'heaters.index',
                    'description' => 'Gérer les chauffages'
                ],
                [
                    'title' => 'Volets',
                    'route' => 'shutters.index',
                    'description' => 'Gérer les volets'
                ]
            ];
        }

        return view('gestion.index', compact('items'));
    }

    public function administration()
    {
        return view('administration');
    }
} 