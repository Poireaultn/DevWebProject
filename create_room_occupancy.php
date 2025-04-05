<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\RoomOccupancy;

// Définir les salles qui doivent être vides (20% des salles)
$totalRooms = 16; // Nombre total de salles
$emptyRoomsCount = ceil($totalRooms * 0.2); // 20% des salles
$emptyRoomIndices = array_rand(array_fill(0, $totalRooms, 0), $emptyRoomsCount);

$rooms = [
    // Salles de classe
    ['room_name' => 'Salle 101', 'people_count' => in_array(0, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 102', 'people_count' => in_array(1, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 103', 'people_count' => in_array(2, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 104', 'people_count' => in_array(3, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 105', 'people_count' => in_array(4, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 201', 'people_count' => in_array(5, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 202', 'people_count' => in_array(6, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 203', 'people_count' => in_array(7, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 204', 'people_count' => in_array(8, $emptyRoomIndices) ? 0 : rand(1, 30)],
    ['room_name' => 'Salle 205', 'people_count' => in_array(9, $emptyRoomIndices) ? 0 : rand(1, 30)],
    // Autres salles
    ['room_name' => 'Salle des Professeurs', 'people_count' => in_array(10, $emptyRoomIndices) ? 0 : rand(1, 15)],
    ['room_name' => 'Bureau Professeur 1', 'people_count' => in_array(11, $emptyRoomIndices) ? 0 : rand(1, 3)],
    ['room_name' => 'Bureau Professeur 2', 'people_count' => in_array(12, $emptyRoomIndices) ? 0 : rand(1, 3)],
    ['room_name' => 'Salle de Stockage', 'people_count' => in_array(13, $emptyRoomIndices) ? 0 : rand(1, 5)],
    ['room_name' => 'Salle des Associations', 'people_count' => in_array(14, $emptyRoomIndices) ? 0 : rand(1, 20)],
    ['room_name' => 'Hall', 'people_count' => in_array(15, $emptyRoomIndices) ? 0 : rand(1, 200)] // Capacité maximale augmentée à 200
];

foreach ($rooms as $room) {
    RoomOccupancy::create($room);
}

echo "Occupation des salles créée avec succès !\n"; 