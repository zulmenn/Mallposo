<?php

use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KunjunganController::class, 'create']);
Route::post('/store', [KunjunganController::class, 'store'])->name('kunjungan.store');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [KunjunganController::class, 'dashboard'])->name('dashboard');
    // Kunjungan
    Route::get('/admin/kunjungan', [KunjunganController::class, 'index'])->name('admin.kunjungan');
    Route::get('/admin/kunjungan/export', [KunjunganController::class, 'export'])->name('admin.kunjungan.export');
    Route::get('/admin/kunjungan/export-excel', [KunjunganController::class, 'exportExcel'])->name('admin.kunjungan.export.excel');
    Route::get('/admin/kunjungan/edit/{id}', [KunjunganController::class, 'edit'])->name('admin.kunjungan.edit');
    Route::post('/admin/kunjungan/update/{id}', [KunjunganController::class, 'update'])->name('admin.kunjungan.update');
    Route::delete('/admin/kunjungan/{id}', [KunjunganController::class, 'destroy'])->name('admin.kunjungan.delete');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
