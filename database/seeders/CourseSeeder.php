<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\RoomOccupancy;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private $courses = [
        [
            'subject' => 'TD',
            'teacher' => 'ING1 GM Pau S2 Promo',
            'room' => 'PAU E109',
            'details' => 'Stat Inf TD S2',
            'start_time' => '08:00',
            'end_time' => '09:30',
            'day_offset' => 1 // Mardi
        ],
        [
            'subject' => 'TD',
            'teacher' => 'ING1 GM Pau S2 Promo',
            'room' => 'PAU E109',
            'details' => 'Gestion de l\'entreprise',
            'start_time' => '08:00',
            'end_time' => '09:30',
            'day_offset' => 2 // Mercredi
        ],
        [
            'subject' => 'TD',
            'teacher' => 'ING1 GM Pau S2 Groupe 1',
            'room' => 'PAU E109',
            'details' => 'Ana Num CM S2',
            'start_time' => '09:45',
            'end_time' => '11:15',
            'day_offset' => 0 // Lundi
        ],
        [
            'subject' => 'Java',
            'teacher' => 'DECOURCHELLE INES',
            'room' => 'PAU E109',
            'details' => '41p',
            'start_time' => '08:00',
            'end_time' => '11:15',
            'day_offset' => 4 // Vendredi
        ],
        [
            'subject' => 'TD',
            'teacher' => 'ING1 GM Pau S2 Promo',
            'room' => 'PAU E209',
            'details' => 'LV1',
            'start_time' => '14:15',
            'end_time' => '15:45',
            'day_offset' => 2 // Mercredi
        ],
        [
            'subject' => 'TD',
            'teacher' => 'ING1 GM Pau S2 Promo',
            'room' => 'PAU E209',
            'details' => 'Dev Web S2',
            'start_time' => '14:15',
            'end_time' => '17:30',
            'day_offset' => 4, // Vendredi
            'professor' => 'FASSI DIEUDONNE'
        ]
    ];

    public function run()
    {
        $monday = Carbon::parse('next monday');

        foreach ($this->courses as $courseData) {
            $startTime = Carbon::parse($courseData['start_time'])
                ->addDays($courseData['day_offset'])
                ->setDateFrom($monday);
            
            $endTime = Carbon::parse($courseData['end_time'])
                ->addDays($courseData['day_offset'])
                ->setDateFrom($monday);

            Course::create([
                'room_name' => $courseData['room'],
                'subject' => $courseData['subject'],
                'teacher' => $courseData['teacher'],
                'details' => $courseData['details'],
                'start_time' => $startTime,
                'end_time' => $endTime,
                'professor' => $courseData['professor'] ?? null
            ]);
        }
    }
} 