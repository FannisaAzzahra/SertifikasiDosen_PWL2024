<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

// Route::get('/', function () {
//     return view('welcome'); // ini dari route langsung ke view
// });

// Route::get('/index', function () {
//     return view('landing.index'); // bisa menggunakan . atau /
// });


//url lalu function
Route::get('halaman_dosen', [LandingController::class, 'halaman_dosen'])->name('landing.halaman_dosen');
Route::get('details', [LandingController::class, 'details'])->name('landing.details');

Route::get('d_sertifikasi', [LandingController::class, 'd_sertifikasi'])->name('landing.d_sertifikasi');
Route::get('d_pelatihan', [LandingController::class, 'd_pelatihan'])->name('landing.d_pelatihan');

Route::resource('/', LandingController::class);