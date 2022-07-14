<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PasienController;
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

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('admin');
    
    // Route::get('/bidan', [BidanController::class, 'index'])->name('bidan.index');
    // Route::get('/bidan/create', [BidanController::class, 'create'])->name('bidan.create');
    // Route::post('/bidan/store', [BidanController::class, 'store'])->name('bidan.store');
    // Route::get('/bidan/{id}', [BidanController::class, 'show'])->name('bidan.show');
    // Route::get('/bidan/edit/{id}', [BidanController::class, 'edit']);
    // Route::patch('/bidan/update/{id}', [BidanController::class, 'update']);
    // Route::delete('/bidan/delete/{id}', [BidanController::class, 'destroy']);

    Route::resource('bidan', BidanController::class);
    
    Route::resource('pasien', PasienController::class);

    Route::resource('posyandu', PosyanduController::class);
    
    Route::resource('layanan', LayananController::class);

    Route::resource('konsultasi', KonsultasiController::class);
    
    Route::get('/user', [AdminController::class, 'index']);
    
    Route::resource('mitra', MitraController::class);

    Route::resource('blog', BlogController::class);
});

