<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactContontroller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;




Route::get('/', function () {
    return view('Welcome');
});
Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});

Route::get('/salam', function () {
    return ('Selamat Datang Loista di Laravel 11');
});



// Praktikum Laravel 2
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/about', [AboutController::class, 'about']);



//Praktikum Laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
Route::get('/dashboard/pasien', [PasienController::class, 'index']);

// Praktikum Laravel 4
Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
Route::post('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);

Route::get('/dashboard/pasien/create', [PasienController::class, 'create']);
Route::post('/dashboard/pasien/store', [PasienController::class, 'store']);
Route::get('/dashboard/pasien/show/{id}', [PasienController::class, 'show']);

//praktikum Laravel 5
Route::get('/dashboard/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
Route::put('/dashboard/kelurahan/update/{id}', [KelurahanController::class, 'update']);
Route::delete('/dashboard/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);

//Tugas Praktikum Laravel 5
Route::get('/dashboard/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/dashboard/pasien/update/{id}', [PasienController::class, 'update']);
Route::delete('/dashboard/pasien/destroy/{id}', [PasienController::class, 'destroy']);