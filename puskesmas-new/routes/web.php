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
Route::get('/contact', [AdminController::class, 'index']);
Route::get('/about', [AdminController::class, 'index']);



//Praktikum Laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
Route::get('/dashboard/pasien', [PasienController::class, 'index']);

// Praktikum Laravel 4
Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
Route::post('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);