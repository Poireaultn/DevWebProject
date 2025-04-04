<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ShutterController;
use App\Http\Controllers\HeaterController;

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
Route::get('/gestion/shutters', [ShutterController::class, 'index'])->name('shutters.index');
Route::get('/visualisation/shutters', [ShutterController::class, 'show'])->name('shutters.show');
Route::post('/shutters/{shutter}/toggle', [ShutterController::class, 'toggle'])->name('shutters.toggle');

// Routes pour les chauffages
Route::get('/gestion/heaters', [HeaterController::class, 'index'])->name('heaters.index');
Route::get('/visualisation/heaters', [HeaterController::class, 'show'])->name('heaters.show');
Route::post('/heaters/{heater}/toggle', [HeaterController::class, 'toggle'])->name('heaters.toggle');
Route::post('/heaters/{heater}/update', [HeaterController::class, 'update'])->name('heaters.update'); 