<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\InfokamarController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\NavbarController;
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
    return view('menu.home', ['judul' => 'Home']);
});

// LAYANAN
Route::get('/poli-anak', function () {
    return view('menu.layanan.polianak', ['judul' => 'Poli Anak']);
});
Route::get('/poli-bedah', function () {
    return view('menu.layanan.polibedah', ['judul' => 'Poli Bedah']);
});

Route::get('/poli-kandungan', function () {
    return view('menu.layanan.polikandungan', ['judul' => 'Poli Kandungan']);
});

Route::get('/poli-gigi', function () {
    return view('menu.layanan.poligigi', ['judul' => 'Poli Gigi']);
});

Route::get('/poli-penyakit-dalam', function () {
    return view('menu.layanan.polipenyakitdalam', ['judul' => 'Poli Penyakit Dalam']);
});

Route::get('/poli-umum', function () {
    return view('menu.layanan.poliumum', ['judul' => 'Poli Umum']);
});

Route::get('/jadwal-dokter', function () {
    return view('menu.layanan.jadwaldokter', ['judul' => 'Jadwal Dokter']);
});

// FASILITAS
Route::get('/ugd', function () {
    return view('menu.fasilitas.ugd', ['judul' => 'UGD']);
});

Route::get('/farmasi', function () {
    return view('menu.fasilitas.farmasi', ['judul' => 'Farmasi']);
});
Route::get('/lab', function () {
    return view('menu.fasilitas.lab', ['judul' => 'Lab']);
});
Route::get('/radiologi', function () {
    return view('menu.fasilitas.radiologi', ['judul' => 'Radiologi']);
});
Route::get('/ruang-operasi', function () {
    return view('menu.fasilitas.operasi', ['judul' => 'Ruang Operasi']);
});
Route::get('/ruang-bersalin', function () {
    return view('menu.fasilitas.bersalin', ['judul' => 'Ruang Bersalin']);
});
Route::get('/ruang-ranap', function () {
    return view('menu.fasilitas.ranap', ['judul' => 'Ruang Rawat Inap']);
});
Route::get('/vip', function () {
    return view('menu.fasilitas.vip', ['judul' => 'VIP']);
});
Route::get('/deluxe', function () {
    return view('menu.fasilitas.deluxe', ['judul' => 'Deluxe']);
});
Route::get('/bangsal', function () {
    return view('menu.fasilitas.bangsal', ['judul' => 'Bangsal']);
});
Route::get('/kantin', function () {
    return view('menu.fasilitas.kantin', ['judul' => 'Kantin']);
});

Route::resource('akun', AkunController::class)->middleware('guest');
Route::post('/akun/create', [AkunController::class, 'login'])->name('akun/create')->middleware('guest');
Route::post('/logout', [AkunController::class, 'logout'])->middleware('auth');
Route::resource('fileupload', FileuploadController::class)->middleware('auth');

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard', ['judul' => 'Dashboard']);
})->middleware('auth');

// layanan
// Route::resource('kamar', InfokamarController::class)->middleware('auth');
Route::get('/kamar', [InfokamarController::class, 'index']);
Route::post('/kamar', [InfokamarController::class, 'store']);
Route::put('/kamar/{infokamar}', [InfokamarController::class, 'update']);
Route::delete('/kamar/{infokamar}', [InfokamarController::class, 'destroy']);

// Route::get('/', [LayananController::class, 'poli']);
// Route::get('layanan/{id}', [LayananController::class, 'show']);
// Route::get('/layanan/{slug}', [LayananController::class, 'viewpoli']);
// Route::get('layanan/{id}', [NavbarController::class, 'viewpoli']);
// Route::get('/layanan/{id}', [NavbarController::class, 'lihat']);
// Route::get('/layanan/{layanan:slug}', [NavbarController::class, 'lihat']);
Route::resource('layanan', LayananController::class)->middleware('auth');
// Route::get('/layanan{layanan:slug}', [LayananController::class, 'detail']);
Route::post('/upload', [LayananController::class, 'upload'])->name("ckeditor.upload");
