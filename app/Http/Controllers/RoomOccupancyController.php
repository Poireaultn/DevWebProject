<?php

namespace App\Http\Controllers;

use App\Models\RoomOccupancy;
use App\Models\RoomReservation;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomOccupancyController extends Controller
{
    public function index()
    {
        $rooms = RoomOccupancy::where('room_type', '!=', 'Bureau')
            ->where('room_name', '!=', 'Hall Principal')
            ->get();
        $now = Carbon::now();
        
        // Vérifier les réservations actives et futures proches
        $activeReservations = RoomReservation::where('is_active', true)
            ->where('start_time', '<=', $now)
            ->where('end_time', '>', $now)
            ->get();
            
        // Vérifier les cours en cours
        $activeCourses = Course::where('start_time', '<=', $now)
            ->where('end_time', '>', $now)
            ->get();
            
        $reservedRooms = $activeReservations->pluck('room_name')->merge($activeCourses->pluck('room_name'))->unique();
        
        foreach ($rooms as $room) {
            $room->is_reserved = $reservedRooms->contains($room->room_name);
            
            // Vérifier s'il y a une réservation future proche pour cette salle
            $futureReservation = RoomReservation::where('room_name', $room->room_name)
                ->where('is_active', true)
                ->where('start_time', '>', $now)
                ->orderBy('start_time', 'asc')
                ->first();
                
            if ($futureReservation) {
                $room->next_reservation_time = $futureReservation->start_time;
            }
        }

        // Récupérer toutes les réservations actives et futures pour l'affichage
        $reservations = RoomReservation::where('is_active', true)
            ->where('end_time', '>', $now)
            ->orderBy('start_time', 'asc')
            ->get();
        
        return view('visualisation.rooms', compact('rooms', 'reservations'));
    }

    public function manage()
    {
        $rooms = RoomOccupancy::where('room_type', '!=', 'Bureau')
            ->where('room_name', '!=', 'Hall Principal')
            ->get();
        $now = Carbon::now();
        
        // Vérifier les réservations actives et futures proches
        $activeReservations = RoomReservation::where('is_active', true)
            ->where('start_time', '<=', $now)
            ->where('end_time', '>', $now)
            ->get();
            
        // Vérifier les cours en cours
        $activeCourses = Course::where('start_time', '<=', $now)
            ->where('end_time', '>', $now)
            ->get();
            
        $reservedRooms = $activeReservations->pluck('room_name')->merge($activeCourses->pluck('room_name'))->unique();
        
        foreach ($rooms as $room) {
            $room->is_reserved = $reservedRooms->contains($room->room_name);
            
            // Vérifier s'il y a une réservation future proche pour cette salle
            $futureReservation = RoomReservation::where('room_name', $room->room_name)
                ->where('is_active', true)
                ->where('start_time', '>', $now)
                ->orderBy('start_time', 'asc')
                ->first();
                
            if ($futureReservation) {
                $room->next_reservation_time = $futureReservation->start_time;
            }
        }
        
        // Récupérer toutes les réservations actives et futures pour l'affichage
        $reservations = RoomReservation::where('is_active', true)
            ->where('end_time', '>', $now)
            ->orderBy('start_time', 'asc')
            ->get();
            
        return view('gestion.rooms', compact('rooms', 'reservations'));
    }

    public function updateOccupancy(RoomOccupancy $room, Request $request)
    {
        $request->validate([
            'people_count' => 'required|integer|min:0'
        ]);

        $room->people_count = $request->people_count;
        $room->save();

        return redirect()->back()->with('success', 'Occupation mise à jour avec succès.');
    }
} 