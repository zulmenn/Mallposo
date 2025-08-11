<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('informasi_publik', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Nama dokumen
            $table->string('kategori')->nullable(); // Misal: Dokumen Kepegawaian
            $table->year('tahun')->nullable();
            $table->string('file_path'); // Lokasi file di storage
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('informasi_publik');
    }
};
