<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactContontroller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index']);

        //kelurahan
        Route::prefix('kelurahan')->group(function () {
        Route::get('/', [KelurahanController::class, 'index']);
        Route::middleware('admin')->get('/create', [KelurahanController::class, 'create']);
        Route::middleware('admin')->post('/store', [KelurahanController::class, 'store']);
        Route::get('/show/{id}', [KelurahanController::class, 'show']);
        Route::middleware('admin')->get('/edit/{id}', [KelurahanController::class, 'edit']);
        Route::middleware('admin')->put('/update/{id}', [KelurahanController::class, 'update']);
        Route::middleware('admin')->delete('/destroy/{id}', [KelurahanController::class, 'destroy']);
        });

        //pasien
        Route::middleware('admin')->prefix('pasien')->group(function () {
        Route::get('/', [PasienController::class, 'index']);
        Route::get('/create', [PasienController::class, 'create']);
        Route::post('/store', [PasienController::class, 'store']);
        Route::get('/show/{id}', [PasienController::class, 'show']);
        Route::get('/edit/{id}', [PasienController::class, 'edit']);
        Route::put('/update/{id}', [PasienController::class, 'update']);
        Route::delete('/destroy/{id}', [PasienController::class, 'destroy']);
        });
    });
    
    Route::get('/contact', [ContactController::class, 'contact']);
    Route::get('/about', [AboutController::class, 'about']);

   
});

require __DIR__.'/auth.php';
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
//Route::get('/dashboard', [AdminController::class, 'index']);
//Route::get('/contact', [ContactController::class, 'contact']);
//Route::get('/about', [AboutController::class, 'about']);



//Praktikum Laravel 3
//Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
//Route::get('/dashboard/pasien', [PasienController::class, 'index']);

// Praktikum Laravel 4
// Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
// Route::post('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
// Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// Route::get('/dashboard/pasien/create', [PasienController::class, 'create']);
// Route::post('/dashboard/pasien/store', [PasienController::class, 'store']);
// Route::get('/dashboard/pasien/show/{id}', [PasienController::class, 'show']);

//praktikum Laravel 5
// Route::get('/dashboard/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
// Route::put('/dashboard/kelurahan/update/{id}', [KelurahanController::class, 'update']);
// Route::delete('/dashboard/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);

//Tugas Praktikum Laravel 5
// Route::get('/dashboard/pasien/edit/{id}', [PasienController::class, 'edit']);
// Route::put('/dashboard/pasien/update/{id}', [PasienController::class, 'update']);
// Route::delete('/dashboard/pasien/destroy/{id}', [PasienController::class, 'destroy']);