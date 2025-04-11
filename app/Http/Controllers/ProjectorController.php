<?php

namespace App\Http\Controllers;

use App\Models\Projector;
use Illuminate\Http\Request;

class ProjectorController extends Controller
{
    public function manage()
    {
        return view('projectors.manage');
    }

    public function show()
    {
        return view('projectors.show');
    }

    public function update(Request $request, Projector $projector)
    {
        // Gérer la case à cocher is_on
        $projector->is_on = $request->has('is_on');
        
        // Gérer les autres champs
        if ($request->filled('source')) {
            $projector->source = $request->source;
        }
        if ($request->filled('brightness')) {
            $projector->brightness = $request->brightness;
        }

        $projector->save();

        return redirect()->route('projectors.manage')
            ->with('success', 'Vidéoprojecteur mis à jour avec succès');
    }

    public function toggle(Request $request, $id)
    {
        // Logique pour activer/désactiver un vidéoprojecteur
        return response()->json(['success' => true]);
    }
} 