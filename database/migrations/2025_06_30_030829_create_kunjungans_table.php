<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('kunjungans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->string('no_hp');
        $table->text('maksud_tujuan');
        $table->text('alamat');
        $table->foreignId('id_instansi')->constrained('tb_instansi');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};
