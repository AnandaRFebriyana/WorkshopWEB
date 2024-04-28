<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;

Route::get('/', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'actionLogin']);

Route::get('/register', [RegisController::class, 'register']);
Route::post('/register', [RegisController::class, 'actionRegister'])->name('register.post');

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/data', [DataController::class, 'showData'])->name('mahasiswas');
Route::post('/add', [HomeController::class, 'postbiodata']);

Route::get('/data/edit/{id_mhs}', [DataController::class, 'formEdit']);
Route::put('/data/update', [DataController::class, 'fungsiEdit']);

Route::get('/data/delete/{id_mhs}', [DataController::class, 'delete']);
Route::get('/data/create', [DataController::class, 'created'])->name('mahasiswa.create-form');

Route::get('location', [LocationController::class, 'index']);
Route::get('location/kabupaten/{id}', [LocationController::class, 'getKabupaten']);
Route::get('location/kecamatan/{id}', [LocationController::class, 'getKecamatan']);
Route::get('location/kelurahan/{id}', [LocationController::class, 'getKelurahan']);