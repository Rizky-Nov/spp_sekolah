<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', [AuthController::class, 'index']);


Route::get('home', [PageController::class, 'Dashboard']);
Route::get('data-siswa', [PageController::class, 'DataSiswa']);
Route::get('data-petugas', [PageController::class, 'DataPetugas']);
Route::get('data-spp', [PageController::class, 'DataSpp']);
Route::get('data-kelas', [PageController::class, 'DataKelas']);
