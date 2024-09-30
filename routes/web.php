<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PersuratanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // Pastikan nama view sesuai dengan file Blade Anda
    })->name('admin.dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
        Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::get('/pengumuman/{id}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
        Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
        Route::get('/pengumuman/search', [PengumumanController::class, 'search'])->name('pengumuman.search');
    });

    // Berita
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
        Route::get('/berita/search', [BeritaController::class, 'search'])->name('berita.search');

    // Data User
    Route::get('/data_user', [UsersController::class, 'index'])->name('data_user');
    Route::get('/data_user/create', [UsersController::class, 'create'])->name('data_user.create');
    Route::post('/data_user', [UsersController::class, 'store'])->name('data_user.store');
    Route::get('/data_user/{id}/edit', [UsersController::class, 'edit'])->name('data_user.edit');
    Route::put('/data_user/{id}', [UsersController::class, 'update'])->name('data_user.update');
    Route::delete('/data_user/{id}', [UsersController::class, 'destroy'])->name('data_user.destroy');
    
    });
    
    // Persuratan
    Route::get('/admin/persuratan', [PersuratanController::class, 'index'])->name('admin.persuratan');
    Route::get('/admin/persuratan/create', [PersuratanController::class, 'create'])->name('admin.persuratan.create');
    Route::post('/admin/persuratan', [PersuratanController::class, 'store'])->name('admin.persuratan.store');
    Route::get('/admin/persuratan/{id}/edit', [PersuratanController::class, 'edit'])->name('admin.persuratan.edit');
    Route::put('/admin/persuratan/{id}', [PersuratanController::class, 'update'])->name('admin.persuratan.update');
    Route::delete('/admin/persuratan/{id}', [PersuratanController::class, 'destroy'])->name('admin.persuratan.destroy');

    // Program
    Route::get('/admin/data_user', [UsersController::class, 'index'])->name('admin.data_user');
    Route::get('/admin/data_user/create', [UsersController::class, 'create'])->name('admin.data_user.create');
    Route::post('/admin/data_user', [UsersController::class, 'store'])->name('admin.data_user.store');
    Route::get('/admin/data_user/{id}/edit', [UsersController::class, 'edit'])->name('admin.data_user.edit');
    Route::put('/admin/data_user/{id}', [UsersController::class, 'update'])->name('admin.data_user.update');
    Route::delete('/admin/data_user/{id}', [UsersController::class, 'destroy'])->name('admin.data_user.destroy');
});

Route::get('/', [HomeController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('welcome'); // Redirect ke halaman welcome
})->name('logout');