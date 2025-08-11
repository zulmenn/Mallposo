<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ktp');
            $table->string('ttl');
            $table->text('alamat');
            $table->text('pekerjaan');
            $table->string('no_hp');
            $table->enum('jenis',['aduan', 'saran', 'pertanyaan']);
            $table->text('isi_pengaduan');
            $table->foreignId('id_instansi')->constrained('tb_instansi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tb');
    }
};
