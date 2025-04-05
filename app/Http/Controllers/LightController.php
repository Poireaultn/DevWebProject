<?php

namespace App\Http\Controllers;

use App\Models\Light;
use Illuminate\Http\Request;

class LightController extends Controller
{
    public function show()
    {
        $lights = Light::all();
        return view('visualisation.lights', compact('lights'));
    }

    public function index()
    {
        $lights = Light::all();
        return view('gestion.lights', compact('lights'));
    }

    public function toggle(Light $light)
    {
        $light->is_on = !$light->is_on;
        $light->save();

        return redirect()->back()->with('success', 'État de la lumière modifié avec succès.');
    }
} 