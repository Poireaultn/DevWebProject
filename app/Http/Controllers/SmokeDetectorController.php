<?php

namespace App\Http\Controllers;

use App\Models\SmokeDetector;
use Illuminate\Http\Request;

class SmokeDetectorController extends Controller
{
    public function manage()
    {
        $detectors = SmokeDetector::all();
        return view('smoke_detectors.index', compact('detectors'));
    }

    public function show()
    {
        $detectors = SmokeDetector::all();
        return view('smoke_detectors.show', compact('detectors'));
    }

    public function update(Request $request, SmokeDetector $detector)
    {
        $validated = $request->validate([
            'is_active' => 'boolean',
            'smoke_detected' => 'boolean'
        ]);

        $detector->update($validated);

        return redirect()->route('smoke_detectors.manage')
            ->with('success', 'Détecteur de fumée mis à jour avec succès');
    }
} 