<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\InformasiPublikController;

// Halaman depan & form kunjungan
Route::get('/frontend', [BeritaController::class, 'news'])->name('frontend.news');
Route::get('/', [KunjunganController::class, 'create']);
Route::post('/store', [KunjunganController::class, 'store'])->name('kunjungan.store');

// ======================
// FRONTEND - INFORMASI PUBLIK
// ======================
Route::get('/informasi-publik', [InformasiPublikController::class, 'index'])->name('informasi.index');
Route::get('/informasi-publik/download/{id}', [InformasiPublikController::class, 'download'])->name('informasi.download');

// Form pengaduan publik
Route::resource('pengaduan', PengaduanController::class)->only(['create', 'store']);

// Route admin (wajib login)
Route::middleware(['auth', 'web'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [KunjunganController::class, 'dashboard'])->name('dashboard');

    // ======================
    // ADMIN - KUNJUNGAN
    // ======================
    Route::prefix('admin/kunjungan')->name('admin.kunjungan.')->group(function () {
        Route::get('/', [KunjunganController::class, 'index'])->name('index');
        Route::get('/export', [KunjunganController::class, 'export'])->name('export.pdf');
        Route::get('/export-excel', [KunjunganController::class, 'exportExcel'])->name('export.excel');
        Route::get('/edit/{id}', [KunjunganController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [KunjunganController::class, 'update'])->name('update');
        Route::delete('/{id}', [KunjunganController::class, 'destroy'])->name('delete');
    })->middleware('checkRole:superAdmin');

    // ======================
    // ADMIN - PENGADUAN
    // ======================
    Route::prefix('admin/pengaduan')->name('admin.pengaduan.')->group(function () {
        Route::get('/', [PengaduanController::class, 'index'])->name('index');
        Route::get('/export-pdf', [PengaduanController::class, 'exportPdf'])->name('export.pdf');
        Route::get('/export-excel', [PengaduanController::class, 'exportExcel'])->name('export.excel');
        Route::get('/edit/{id}', [PengaduanController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PengaduanController::class, 'update'])->name('update');
        Route::delete('/{id}', [PengaduanController::class, 'destroy'])->name('delete');
    })->middleware('checkRole:Admin,superAdmin');

    // ======================
    // ADMIN - INSTANSI
    // ======================
    Route::prefix('admin/instansi')->name('admin.instansi.')->group(function () {
        Route::get('/', [InstansiController::class, 'index'])->name('index');
        Route::get('/create', [InstansiController::class, 'create'])->name('create');
        Route::post('/', [InstansiController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [InstansiController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [InstansiController::class, 'update'])->name('update');
        Route::delete('/{id}', [InstansiController::class, 'destroy'])->name('delete');
    })->middleware('checkRole:superAdmin');

    // ======================
    // ADMIN - BERITA
    // ======================
    Route::prefix('admin/berita')->name('admin.berita.')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('index');
        Route::get('/create', [BeritaController::class, 'create'])->name('create');
        Route::post('/', [BeritaController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('edit');
        Route::put('/{id}', [BeritaController::class, 'update'])->name('update');
        Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('delete');
        Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
    })->middleware('checkRole:superAdmin');

    // ======================
    // ADMIN - PROFIL
    // ======================
    Route::prefix('admin/profil')->name('admin.profil.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
    })->middleware('checkRole:superAdmin');

    // ======================
    // ADMIN - PENGHARGAAN & INFOGRAFIS
    // ======================
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('penghargaan', PenghargaanController::class);
        Route::resource('infografis', InfografisController::class);
    })->middleware('checkRole:superAdmin');

    // ======================
    // ADMIN - INFORMASI PUBLIK
    // ======================
    Route::prefix('admin/informasi-publik')->name('admin.informasi_publik.')->middleware('checkRole:superAdmin')->group(function () {
        Route::get('/', [InformasiPublikController::class, 'index'])->name('index'); // Tampilkan semua data
        Route::get('/create', [InformasiPublikController::class, 'create'])->name('create'); // Form tambah
        Route::post('/', [InformasiPublikController::class, 'store'])->name('store'); // Simpan data baru
        Route::get('/edit/{id}', [InformasiPublikController::class, 'edit'])->name('edit'); // Form edit
        Route::put('/update/{id}', [InformasiPublikController::class, 'update'])->name('update'); // Simpan perubahan
        Route::delete('/{id}', [InformasiPublikController::class, 'destroy'])->name('destroy'); // Hapus data
    })->middleware('checkRole:superAdmin');
});

require __DIR__ . '/auth.php';
