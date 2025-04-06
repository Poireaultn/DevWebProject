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
        // Les cases à cocher non cochées ne sont pas envoyées dans la requête
        // donc on doit les traiter explicitement
        $detector->is_active = $request->has('is_active');
        $detector->smoke_detected = $request->has('smoke_detected');
        $detector->save();

        return redirect()->route('smoke_detectors.manage')
            ->with('success', 'Détecteur de fumée mis à jour avec succès');
    }
} 