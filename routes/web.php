<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ColorcastController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard/consulta', [AnimalController::class, 'index'])->name('consultas');
Route::get('/dashboard/consultaCompra', [UserController::class, 'index'])->name('consultasCompra');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/animal', [AnimalController::class, 'store'])->name('animal');
Route::post('/colorcast', [ColorcastController::class, 'store'])->name('colorcast');
Route::post('/user', [UserController::class, 'store'])->name('user');
