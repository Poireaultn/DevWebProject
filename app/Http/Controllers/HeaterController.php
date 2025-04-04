<?php

namespace App\Http\Controllers;

use App\Models\Heater;
use Illuminate\Http\Request;

class HeaterController extends Controller
{
    public function index()
    {
        $heaters = Heater::all();
        return view('gestion.heaters', compact('heaters'));
    }

    public function show()
    {
        $heaters = Heater::all();
        return view('visualisation.heaters', compact('heaters'));
    }

    public function toggle(Heater $heater)
    {
        $heater->is_on = !$heater->is_on;
        $heater->save();
        
        return redirect()->back()->with('success', 'État du chauffage mis à jour avec succès');
    }

    public function update(Request $request, Heater $heater)
    {
        $request->validate([
            'temperature' => 'required|numeric|min:10|max:30',
            'mode' => 'required|in:chauffage,climatisation'
        ]);

        $heater->update([
            'temperature' => $request->temperature,
            'mode' => $request->mode
        ]);

        return redirect()->back()->with('success', 'Paramètres du chauffage mis à jour avec succès');
    }
}
