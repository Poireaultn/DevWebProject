<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function show()
    {
        $cameras = Camera::all();
        return view('visualisation.cameras', compact('cameras'));
    }

    public function index()
    {
        $cameras = Camera::all();
        return view('gestion.cameras', compact('cameras'));
    }

    public function toggle(Camera $camera)
    {
        $camera->is_on = !$camera->is_on;
        $camera->save();

        return redirect()->back()->with('success', 'État de la caméra modifié avec succès.');
    }
} 