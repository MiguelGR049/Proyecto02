<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'welcome'])->name('welcome');
Route::get('/inicio', [InicioController::class, 'inicio'])->name('inicio');
Route::get('/home', [InicioController::class, 'home'])->name('home');
Route::get('/login', [InicioController::class, 'login'])->name('login');
Route::get('/registro', [InicioController::class, 'registro'])->name('registro');
Route::get('/ajuste', [InicioController::class, 'ajuste'])->name('ajuste');
