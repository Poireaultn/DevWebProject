<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\RoomOccupancy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function schedule()
    {
        $rooms = RoomOccupancy::all();
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        
        $timeSlots = [];
        $currentTime = Carbon::createFromTime(8, 0); // Début à 8h
        $endTime = Carbon::createFromTime(18, 0); // Fin à 18h
        
        while ($currentTime < $endTime) {
            $timeSlots[] = [
                'start' => $currentTime->format('H:i'),
                'end' => $currentTime->copy()->addHour()->format('H:i')
            ];
            $currentTime->addHour();
        }

        $courses = Course::whereBetween('start_time', [$startOfWeek, $endOfWeek])->get();
        $schedule = [];
        
        foreach ($rooms as $room) {
            $schedule[$room->room_name] = [];
            foreach ($timeSlots as $slot) {
                $schedule[$room->room_name][$slot['start']] = null;
            }
        }
        
        foreach ($courses as $course) {
            $timeKey = $course->start_time->format('H:i');
            if (isset($schedule[$course->room_name][$timeKey])) {
                $schedule[$course->room_name][$timeKey] = $course;
            }
        }

        return view('visualisation.schedule', compact('schedule', 'timeSlots', 'rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_name' => 'required|string',
            'subject' => 'required|string',
            'start_time' => 'required|date',
        ]);

        $teacher = Course::$subjects[$request->subject] ?? 'Enseignant non défini';
        $start_time = Carbon::parse($request->start_time);
        $end_time = $start_time->copy()->addHour();

        Course::create([
            'room_name' => $request->room_name,
            'subject' => $request->subject,
            'teacher' => $teacher,
            'start_time' => $start_time,
            'end_time' => $end_time,
        ]);

        return redirect()->back()->with('success', 'Cours ajouté avec succès.');
    }
}
