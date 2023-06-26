<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Auth::routes();
//home controller
Route::get('/home', [HomeController::class, 'index'])->name('home');
//image controller
Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/image/store', [ImageController::class, 'store'])->name('image.store');
//pesan
Route::get('pesan/{id}', [PesanController::class, 'index']);
Route::post('pesan/{id}', [PesanController::class, 'pesan']);
//check-out
Route::get('check-out', [PesanController::class, 'check_out']);
Route::delete('check-out/{id}', [PesanController::class, 'delete']);
//konfirmasi
Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);
//profile
Route::get('profile', [ProfileController::class, 'index']);
Route::post('profile', [ProfileController::class, 'update']);
//history
// Route::get('history', [HistoryController::class, 'index']);
// Route::get('history/{id}', [HistoryController::class, 'detail']);
Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
Route::get('/history/{id}', [HistoryController::class, 'detail'])->name('history.detail');
Route::post('/history/{id}/payment', [HistoryController::class, 'payment'])->name('history.payment');
