<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function show()
    {
        $parking = Parking::first();
        $parking->updateAvailability();
        return view('parking.show', compact('parking'));
    }

    public function index()
    {
        $parking = Parking::first();
        return view('parking.manage', compact('parking'));
    }

    public function toggle(Request $request)
    {
        $parking = Parking::first();
        $parking->is_open = !$parking->is_open;
        $parking->save();

        return redirect()->route('parking.manage')
            ->with('success', 'Le parking a été ' . ($parking->is_open ? 'ouvert' : 'fermé') . ' avec succès.');
    }

    public function manage()
    {
        $parking = Parking::first();
        return view('parking.manage', compact('parking'));
    }
} 