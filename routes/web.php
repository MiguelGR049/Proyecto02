<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/home', [InicioController::class, 'home']);

Route::get('/login', [InicioController::class, 'login']);
Route::get('/registro', [InicioController::class, 'registro']);
Route::get('/ajuste', [InicioController::class, 'ajuste']);