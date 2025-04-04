<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome']);
Route::get('/information', [PageController::class, 'information']);
Route::get('/visualisation', [PageController::class, 'visualisation']);
Route::get('/gestion', [PageController::class, 'gestion']);
Route::get('/administration', [PageController::class, 'administration']); 