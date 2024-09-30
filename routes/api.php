<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeApiController;
use App\Http\Controllers\PesanApiController;
use App\Http\Controllers\ProfileApiController;
use App\Http\Controllers\HistoryApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'api'], function () {
    // Auth
    Route::post('/register', [RegisterController::class, 'register'])->name('api.login');
    Route::post('/login', [LoginController::class, 'login'])->name('api.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('api.logout');

    // PesanApiController
    Route::get('/pesan/barang/{id}', [PesanApiController::class, 'index'])->name('api.pesan.index');
    Route::post('/pesan/barang/{id}', [PesanApiController::class, 'pesan'])->name('api.pesan.pesan');
    Route::get('/pesan/check-out', [PesanApiController::class, 'checkOut'])->name('api.pesan.check_out');
    Route::delete('/pesan/delete/{id}', [PesanApiController::class, 'delete'])->name('api.pesan.delete');
    Route::post('/pesan/konfirmasi', [PesanApiController::class, 'konfirmasi'])->name('api.pesan.konfirmasi');

    // ProfileApiController
    Route::get('/profile', [ProfileApiController::class, 'index'])->name('api.profile.index');
    Route::put('/profile/update', [ProfileApiController::class, 'update'])->name('api.profile.update');

    // HistoryApiController
    Route::get('/history', [HistoryApiController::class, 'index'])->name('api.history.index');
    Route::get('/history/detail/{id}', [HistoryApiController::class, 'detail'])->name('api.history.detail');
    Route::post('/history/payment/{id}', [HistoryApiController::class, 'payment'])->name('api.history.payment');
});