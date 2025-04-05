<?php

namespace App\Http\Controllers;

use App\Models\Heater;
use Illuminate\Http\Request;

class HeaterController extends Controller
{
    public function show()
    {
        $heaters = Heater::all();
        return view('visualisation.heaters', compact('heaters'));
    }

    public function index()
    {
        $heaters = Heater::all();
        return view('gestion.heaters', compact('heaters'));
    }

    public function toggle(Heater $heater)
    {
        $heater->is_on = !$heater->is_on;
        $heater->save();

        return redirect()->back()->with('success', 'État du chauffage modifié avec succès.');
    }

    public function update(Request $request, Heater $heater)
    {
        $request->validate([
            'temperature' => 'required|numeric|between:15,30'
        ]);

        $heater->target_temperature = $request->temperature;
        $heater->save();

        return redirect()->back()->with('success', 'Température cible mise à jour avec succès.');
    }
}
