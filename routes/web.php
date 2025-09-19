<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ✅ Route publik → bisa diakses tanpa login

Route::resource('pengguna', PenggunaController::class);
Route::resource('peminjaman', PeminjamanController::class);


// ✅ Dashboard → hanya bisa diakses login
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Admin: hanya login yang bisa CRUD barang
    Route::resource('products', ProductController::class);
    

});

require __DIR__.'/auth.php';

