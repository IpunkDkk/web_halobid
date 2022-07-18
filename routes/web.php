<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BayiController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MedisController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Layanan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('admin')->middleware('auth');

    Route::resource('bidan', BidanController::class)->middleware('auth');
    
    Route::resource('pasien', PasienController::class)->middleware('auth');

    Route::resource('petugas', PetugasController::class)->middleware('auth');

    Route::resource('bayi', BayiController::class)->middleware('auth');

    Route::resource('imunisasi', ImunisasiController::class)->middleware('auth');

    Route::resource('obat', ObatController::class)->middleware('auth');

    Route::resource('medis', MedisController::class)->middleware('auth');

    Route::resource('posyandu', PosyanduController::class)->middleware('auth');
    
    Route::resource('layanan', LayananController::class)->middleware('auth');

    Route::resource('konsultasi', KonsultasiController::class)->middleware('auth');
    
    Route::resource('user', AdminController::class)->middleware('auth');
    
    Route::resource('mitra', MitraController::class)->middleware('auth');

    Route::resource('blog', BlogController::class)->middleware('auth');
});

