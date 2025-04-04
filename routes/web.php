<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [PageController::class, 'welcome']);
Route::get('/information', [PageController::class, 'information']);
Route::get('/visualisation', [PageController::class, 'visualisation']);
Route::get('/gestion', [PageController::class, 'gestion']);
Route::get('/administration', [PageController::class, 'administration']);

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 