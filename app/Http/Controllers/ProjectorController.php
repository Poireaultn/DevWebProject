<?php

namespace App\Http\Controllers;

use App\Models\Projector;
use Illuminate\Http\Request;

class ProjectorController extends Controller
{
    public function manage()
    {
        $projectors = Projector::all();
        return view('projectors.manage', compact('projectors'));
    }

    public function show()
    {
        $projectors = Projector::all();
        return view('projectors.show', compact('projectors'));
    }

    public function update(Request $request, Projector $projector)
    {
        // Conserver l'état actuel du projecteur
        $currentState = $projector->is_on;
        
        // Gérer les autres champs
        if ($request->filled('source')) {
            $projector->source = $request->source;
        }
        if ($request->filled('brightness')) {
            $projector->brightness = $request->brightness;
        }
        
        // Restaurer l'état du projecteur
        $projector->is_on = $currentState;
        
        $projector->save();

        return redirect()->route('projectors.manage')
            ->with('success', 'Vidéoprojecteur mis à jour avec succès');
    }

    public function toggle(Request $request, $id)
    {
        $projector = Projector::findOrFail($id);
        $projector->is_on = !$projector->is_on;
        $projector->save();
        
        return redirect()->route('projectors.manage')
            ->with('success', 'État du vidéoprojecteur modifié avec succès');
    }
} 