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
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\BikeParkingController;
use App\Http\Controllers\DisplayPanelController;
use App\Http\Controllers\SmokeDetectorController;
use App\Http\Controllers\ProjectorController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\CoffeeMachineController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\BlindController;
use App\Http\Controllers\HeatingController;

// Routes publiques
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/information', [PageController::class, 'information'])->name('information');

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes protégées par authentification
Route::middleware(['auth'])->group(function () {
    Route::get('/visualisation', [PageController::class, 'visualisation'])->name('visualisation');
    Route::get('/gestion', [GestionController::class, 'index'])->name('gestion.index');
    Route::get('/administration', [PageController::class, 'administration'])->name('administration');

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
    Route::get('/visualisation/lights', [LightController::class, 'show'])->name('lights.show');
    Route::get('/gestion/lights', [LightController::class, 'index'])->name('lights.index');
    Route::post('/lights/{light}/toggle', [LightController::class, 'toggle'])->name('lights.toggle');

    // Routes pour l'occupation des salles
    Route::get('/visualisation/rooms', [RoomOccupancyController::class, 'show'])->name('rooms.index');
    Route::get('/gestion/rooms', [RoomOccupancyController::class, 'manage'])->name('rooms.manage');
    Route::post('/rooms/{room}/update-occupancy', [RoomOccupancyController::class, 'updateOccupancy'])->name('rooms.update-occupancy');

    // Routes pour les réservations de salles
    Route::post('/rooms/reserve', [RoomReservationController::class, 'store'])->name('rooms.reserve');
    Route::post('/rooms/reservations/{reservation}/cancel', [RoomReservationController::class, 'cancel'])->name('rooms.cancel-reservation');

    // Routes pour l'emploi du temps
    Route::get('/visualisation/schedule', [CourseController::class, 'schedule'])->name('schedule');
    Route::get('/gestion/schedule', [CourseController::class, 'manage'])->name('schedule.manage');
    Route::post('/schedule/store', [CourseController::class, 'store'])->name('schedule.store');

    // Routes pour le parking
    Route::get('/visualisation/parking', [ParkingController::class, 'show'])->name('parking.show');
    Route::get('/gestion/parking', [ParkingController::class, 'manage'])->name('parking.manage');
    Route::post('/parking/toggle', [ParkingController::class, 'toggle'])->name('parking.toggle');

    // Routes pour le parking à vélos
    Route::get('/visualisation/bike-parking', [BikeParkingController::class, 'show'])->name('bike_parking.show');
    Route::get('/gestion/bike-parking', [BikeParkingController::class, 'manage'])->name('bike_parking.manage');
    Route::post('/bike-parking/toggle', [BikeParkingController::class, 'toggle'])->name('bike_parking.toggle');

    // Routes pour les caméras
    Route::get('/visualisation/cameras', [CameraController::class, 'show'])->name('cameras.show');
    Route::get('/gestion/cameras', [CameraController::class, 'index'])->name('cameras.index');
    Route::post('/cameras/{camera}/toggle', [CameraController::class, 'toggle'])->name('cameras.toggle');

    // Routes pour les détecteurs de fumée
    Route::get('/visualisation/smoke-detectors', [SmokeDetectorController::class, 'show'])->name('smoke_detectors.show');
    Route::get('/gestion/smoke-detectors', [SmokeDetectorController::class, 'index'])->name('smoke_detectors.index');
    Route::post('/smoke-detectors/{detector}/toggle', [SmokeDetectorController::class, 'toggle'])->name('smoke_detectors.toggle');

    // Routes pour les panneaux d'affichage
    Route::get('/visualisation/display-panels', [DisplayPanelController::class, 'show'])->name('display_panels.show');
    Route::get('/gestion/display-panels', [DisplayPanelController::class, 'index'])->name('display_panels.index');
    Route::post('/display-panels/{panel}/toggle', [DisplayPanelController::class, 'toggle'])->name('display_panels.toggle');

    // Routes pour les volets
    Route::get('/visualisation/blinds', [BlindController::class, 'show'])->name('blinds.show');
    Route::get('/gestion/blinds', [BlindController::class, 'index'])->name('blinds.index');
    Route::post('/blinds/{blind}/toggle', [BlindController::class, 'toggle'])->name('blinds.toggle');

    // Routes pour le chauffage
    Route::get('/visualisation/heating', [HeatingController::class, 'show'])->name('heating.show');
    Route::get('/gestion/heating', [HeatingController::class, 'index'])->name('heating.index');
    Route::post('/heating/{heater}/toggle', [HeatingController::class, 'toggle'])->name('heating.toggle');

    // Routes pour les distributeurs
    Route::get('/visualisation/distributors', [DistributorController::class, 'show'])->name('distributors.show');
    Route::get('/gestion/distributors', [DistributorController::class, 'index'])->name('distributors.index');
    Route::post('/distributors/{distributor}/toggle', [DistributorController::class, 'toggle'])->name('distributors.toggle');

    // Routes pour les distributeurs de café
    Route::get('/visualisation/coffee-machines', [CoffeeMachineController::class, 'show'])->name('coffee_machines.show');
    Route::get('/gestion/coffee-machines', [CoffeeMachineController::class, 'index'])->name('coffee_machines.index');
    Route::post('/coffee-machines/{coffeeMachine}/toggle', [CoffeeMachineController::class, 'toggle'])->name('coffee_machines.toggle');
    Route::post('/coffee-machines/{coffeeMachine}/update-product', [CoffeeMachineController::class, 'updateProduct'])->name('coffee_machines.update_product');

    // Routes pour les vidéoprojecteurs
    Route::get('/visualisation/projectors', [ProjectorController::class, 'show'])->name('projectors.show');
    Route::get('/gestion/projectors', [ProjectorController::class, 'manage'])->name('projectors.manage');
    Route::post('/projectors/{projector}/toggle', [ProjectorController::class, 'toggle'])->name('projectors.toggle');
});

// Supprimer la route resource qui peut causer des conflits
// Route::resource('display_panels', DisplayPanelController::class); 