<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\FileuploadController;
use Illuminate\Support\Facades\Route;

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
    return view('menu.home');
});

// LAYANAN
Route::get('/poli-anak', function () {
    return view('menu.layanan.polianak');
});

Route::get('/poli-kandungan', function () {
    return view('menu.layanan.polikandungan');
});

Route::get('/poli-gigi', function () {
    return view('menu.layanan.poligigi');
});

Route::get('/poli-penyakit-dalam', function () {
    return view('menu.layanan.polipenyakitdalam');
});

Route::get('/poli-umum', function () {
    return view('menu.layanan.poliumum');
});

Route::get('/jadwal-dokter', function () {
    return view('menu.jadwaldokter');
});

// FASILITAS
Route::get('/ugd', function () {
    return view('menu.fasilitas.ugd');
});

Route::get('/farmasi', function () {
    return view('menu.fasilitas.farmasi')->name('farmasi');
});

Route::resource('akun', AkunController::class)->middleware('guest');
Route::post('/akun/create', [AkunController::class, 'login'])->name('akun/create')->middleware('guest');
Route::post('/logout', [AkunController::class, 'logout'])->middleware('auth');
Route::resource('fileupload', FileuploadController::class)->middleware('auth');
