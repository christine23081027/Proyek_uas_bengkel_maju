<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ServisController;

// Rute Dashboard
Route::get('/', function () { return view('dashboard'); });

// Rute Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::post('/pelanggan', [PelangganController::class, 'store']);

// Rute Kendaraan
Route::get('/kendaraan', [App\Http\Controllers\KendaraanController::class, 'index']);
Route::post('/kendaraan', [App\Http\Controllers\KendaraanController::class, 'store']);

// Rute Servis
Route::get('/servis', [ServisController::class, 'index']);
Route::post('/servis', [ServisController::class, 'store']);