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
Route::get('sertifikasi', [LandingController::class, 'sertifikasi'])->name('landing.sertifikasi');
Route::get('details', [LandingController::class, 'details'])->name('landing.details');

Route::get('pengajuan', [LandingController::class, 'pengajuan'])->name('landing.pengajuan');
Route::get('tentang', [LandingController::class, 'tentang'])->name('landing.tentang');

Route::resource('/', LandingController::class);