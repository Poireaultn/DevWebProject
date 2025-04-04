<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('visualisation');
    }

    public function gestion()
    {
        return view('gestion');
    }

    public function administration()
    {
        return view('administration');
    }
} 