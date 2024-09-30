<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PesanController;

Route::get('/main', [MainController::class, 'main']);
Route::get('/mainLogin', [MainController::class, 'mainLogin']);


// Route Pengguna 
Route::get('/home', [MainController::class, 'home']);
Route::get('/daftar', [DaftarController::class, 'daftar']);
Route::get('/masuk', [DaftarController::class, 'masuk']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/kursus', [KursusController::class, 'kursus']);
Route::get('/pesan', [PesanController::class, 'pesan']);
Route::get('/pengaturan', [PengaturanController::class, 'pengaturan']);
Route::get('/daftarkursus', [MainController::class, 'daftarkursus']);
