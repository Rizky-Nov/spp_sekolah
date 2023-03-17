<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Models\Petugas;
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

Route::middleware('guest:petugas,siswa')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/loginAksi', [AuthController::class, 'loginAksi']);
});

Route::middleware('auth:petugas,siswa')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    
    Route::get('home', [PageController::class, 'Dashboard']);
    Route::get('histori', [PageController::class, 'Histori']);
    
    Route::middleware('IsAdmin')->group(function () {
        Route::get('data-siswa', [PageController::class, 'DataSiswa']);
        Route::get('data-petugas', [PageController::class, 'DataPetugas']);
        Route::get('data-spp', [PageController::class, 'DataSpp']);
        Route::get('data-kelas', [PageController::class, 'DataKelas']);
    });
    
    Route::middleware('auth:petugas')->group(function () {
        Route::get('pembayaran', [PageController::class, 'Pembayaran']);
        Route::get('cetak-laporan', [PageController::class, 'CetakLaporan']);
    });
});


