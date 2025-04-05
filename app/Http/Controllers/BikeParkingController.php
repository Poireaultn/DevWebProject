<?php

namespace App\Http\Controllers;

use App\Models\BikeParking;
use Illuminate\Http\Request;

class BikeParkingController extends Controller
{
    public function show()
    {
        $bikeParking = BikeParking::first();
        $bikeParking->updateAvailability();
        return view('bike_parking.show', compact('bikeParking'));
    }

    public function index()
    {
        $bikeParking = BikeParking::first();
        return view('bike_parking.manage', compact('bikeParking'));
    }

    public function toggle(Request $request)
    {
        $bikeParking = BikeParking::first();
        $bikeParking->is_open = !$bikeParking->is_open;
        $bikeParking->save();

        return redirect()->route('bike_parking.manage')
            ->with('success', 'Le parking à vélos a été ' . ($bikeParking->is_open ? 'ouvert' : 'fermé') . ' avec succès.');
    }
} 