<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apuestas', [ApuestaController::class, 'index']);
Route::get('/apuestas/jugadores-mayor-3', [ApuestaController::class, 'jugadoresMayor3']);
Route::get('/apuestas/CartasvsNoCartas', [ApuestaController::class, 'juegosCartasVsNoCartas']);
Route::get('/apuestas/buscar', [ApuestaController::class, 'buscar']);
Route::get('/apuestas/crear', [ApuestaController::class, 'crear']);
Route::post('/apuestas', [ApuestaController::class, 'store']);
