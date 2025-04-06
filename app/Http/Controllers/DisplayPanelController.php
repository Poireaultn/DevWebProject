<?php

namespace App\Http\Controllers;

use App\Models\DisplayPanel;
use Illuminate\Http\Request;

class DisplayPanelController extends Controller
{
    public function index()
    {
        $panels = DisplayPanel::all();
        return view('display_panels.index', compact('panels'));
    }

    public function show()
    {
        $panels = DisplayPanel::all();
        return view('display_panels.show', compact('panels'));
    }

    public function update(Request $request, DisplayPanel $panel)
    {
        $validated = $request->validate([
            'status' => 'required|in:on,off',
            'content' => 'required|string'
        ]);

        $panel->update($validated);
        return redirect()->route('display_panels.manage')
            ->with('success', 'Panneau mis à jour avec succès');
    }
} 