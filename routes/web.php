<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rutas principales
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/fotos', [PageController::class, 'fotos'])->name('fotos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

// Eliminar rutas de autenticación si no las necesitas
// Auth::routes();