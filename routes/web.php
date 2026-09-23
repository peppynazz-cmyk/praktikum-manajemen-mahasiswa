<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Mahasiswa
    |--------------------------------------------------------------------------
    */

    // Admin - halaman tambah harus diletakkan sebelum {mahasiswa}
    Route::middleware('role:admin')->group(function () {

        Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])
            ->name('mahasiswa.create');

        Route::post('/mahasiswa', [MahasiswaController::class, 'store'])
            ->name('mahasiswa.store');

        Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
            ->name('mahasiswa.edit');

        Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])
            ->name('mahasiswa.update');

        Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])
            ->name('mahasiswa.destroy');
    });

    // Semua user yang sudah login bisa melihat data
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
        ->name('mahasiswa.index');

    Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])
        ->name('mahasiswa.show');


    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';