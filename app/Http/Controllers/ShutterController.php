<?php

namespace App\Http\Controllers;

use App\Models\Shutter;
use Illuminate\Http\Request;

class ShutterController extends Controller
{
    public function show()
    {
        $shutters = Shutter::all();
        return view('visualisation.shutters', compact('shutters'));
    }

    public function index()
    {
        $shutters = Shutter::all();
        return view('gestion.shutters', compact('shutters'));
    }

    public function toggle(Shutter $shutter)
    {
        $shutter->is_open = !$shutter->is_open;
        $shutter->save();

        return redirect()->back()->with('success', 'État du volet modifié avec succès.');
    }
}
