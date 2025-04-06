<?php

namespace App\Http\Controllers;

use App\Models\Projector;
use Illuminate\Http\Request;

class ProjectorController extends Controller
{
    public function manage()
    {
        $projectors = Projector::all();
        return view('projectors.index', compact('projectors'));
    }

    public function show()
    {
        $projectors = Projector::all();
        return view('projectors.show', compact('projectors'));
    }

    public function update(Request $request, Projector $projector)
    {
        $validated = $request->validate([
            'is_on' => 'boolean',
            'source' => 'string',
            'brightness' => 'integer|min:0|max:100'
        ]);

        $projector->update($validated);

        return redirect()->route('projectors.manage')
            ->with('success', 'Vidéoprojecteur mis à jour avec succès');
    }
} 