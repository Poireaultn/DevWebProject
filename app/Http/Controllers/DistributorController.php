<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function show()
    {
        return view('visualisation.distributors');
    }

    public function index()
    {
        return view('gestion.distributors');
    }

    public function toggle(Request $request, $id)
    {
        // Logique pour activer/désactiver un distributeur
        return response()->json(['success' => true]);
    }
} 