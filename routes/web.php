<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ShutterController;
use App\Http\Controllers\HeaterController;
use App\Http\Controllers\LightController;
use App\Http\Controllers\RoomOccupancyController;
use App\Http\Controllers\RoomReservationController;
use App\Http\Controllers\CourseController;

Route::get('/', [PageController::class, 'welcome']);
Route::get('/information', [PageController::class, 'information']);
Route::get('/visualisation', [PageController::class, 'visualisation']);
Route::get('/gestion', [PageController::class, 'gestion']);
Route::get('/administration', [PageController::class, 'administration']);

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes pour les volets
Route::get('/visualisation/shutters', [ShutterController::class, 'show'])->name('shutters.show');
Route::get('/gestion/shutters', [ShutterController::class, 'index'])->name('shutters.index');
Route::post('/shutters/{shutter}/toggle', [ShutterController::class, 'toggle'])->name('shutters.toggle');

// Routes pour les chauffages
Route::get('/visualisation/heaters', [HeaterController::class, 'show'])->name('heaters.show');
Route::get('/gestion/heaters', [HeaterController::class, 'index'])->name('heaters.index');
Route::post('/heaters/{heater}/toggle', [HeaterController::class, 'toggle'])->name('heaters.toggle');
Route::post('/heaters/{heater}/update', [HeaterController::class, 'update'])->name('heaters.update');

// Routes pour les lumières
Route::get('/visualisation/lights', [LightController::class, 'show'])->name('lights.index');
Route::get('/gestion/lights', [LightController::class, 'index'])->name('lights.manage');
Route::post('/lights/{light}/toggle', [LightController::class, 'toggle'])->name('lights.toggle');

// Routes pour l'occupation des salles
Route::get('/visualisation/rooms', [RoomOccupancyController::class, 'index'])->name('rooms.index');
Route::get('/gestion/rooms', [RoomOccupancyController::class, 'manage'])->name('rooms.manage');
Route::post('/rooms/{room}/update-occupancy', [RoomOccupancyController::class, 'updateOccupancy'])->name('rooms.update-occupancy');

// Routes pour les réservations de salles
Route::post('/rooms/reserve', [RoomReservationController::class, 'store'])->name('rooms.reserve');
Route::post('/rooms/reservations/{reservation}/cancel', [RoomReservationController::class, 'cancel'])->name('rooms.cancel-reservation');

// Routes pour l'emploi du temps
Route::get('/visualisation/schedule', [CourseController::class, 'schedule'])->name('schedule');
Route::get('/gestion/schedule', [CourseController::class, 'manage'])->name('schedule.manage');
Route::post('/schedule/store', [CourseController::class, 'store'])->name('schedule.store'); 