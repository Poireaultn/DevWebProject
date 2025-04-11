<?php

namespace App\Http\Controllers;

use App\Models\RoomOccupancy;
use App\Models\RoomReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RoomReservationController extends Controller
{
    public function index()
    {
        $rooms = RoomOccupancy::all();
        $reservations = RoomReservation::where('is_active', true)
            ->where('end_time', '>', now())
            ->get();
        
        return view('visualisation.rooms', compact('rooms', 'reservations'));
    }

    public function manage()
    {
        $rooms = RoomOccupancy::all();
        $reservations = RoomReservation::where('is_active', true)
            ->where('end_time', '>', now())
            ->get();
        
        return view('gestion.rooms', compact('rooms', 'reservations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_name' => 'required|string',
            'purpose' => 'required|string',
            'start_time' => 'required|date',
        ]);

        // Vérifier si la salle est libre
        $room = RoomOccupancy::where('room_name', $request->room_name)->first();
        if (!$room) {
            return redirect()->back()->with('error', 'La salle n\'existe pas.');
        }

        // Définir l'heure de fin à exactement 1 heure après l'heure de début
        $start_time = Carbon::parse($request->start_time);
        $end_time = $start_time->copy()->addHour();

        // Vérifier s'il n'y a pas déjà une réservation pour ce créneau
        $existingReservation = RoomReservation::where('room_name', $request->room_name)
            ->where('is_active', true)
            ->where(function($query) use ($start_time, $end_time) {
                $query->whereBetween('start_time', [$start_time, $end_time])
                    ->orWhereBetween('end_time', [$start_time, $end_time]);
            })->first();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'Ce créneau est déjà réservé.');
        }

        // Créer la réservation
        RoomReservation::create([
            'room_name' => $request->room_name,
            'reserved_by' => auth()->user()->name,
            'purpose' => $request->purpose,
            'start_time' => $start_time,
            'end_time' => $end_time,
            'is_active' => true
        ]);

        return redirect()->back()->with('success', 'Salle réservée avec succès pour une heure.');
    }

    public function cancel(RoomReservation $reservation)
    {
        $reservation->is_active = false;
        $reservation->save();

        return redirect()->back()->with('success', 'Réservation annulée avec succès.');
    }
} 