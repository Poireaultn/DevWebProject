<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shutter;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function information()
    {
        return view('information');
    }

    public function visualisation()
    {
        $shutters = Shutter::all();
        return view('visualisation', compact('shutters'));
    }

    public function gestion()
    {
        $shutters = Shutter::all();
        return view('gestion', compact('shutters'));
    }

    public function administration()
    {
        return view('administration');
    }
} 