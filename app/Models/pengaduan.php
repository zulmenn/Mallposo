<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'tb_pengaduan'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'ktp',
        'ttl',
        'alamat',
        'pekerjaan',
        'no_hp',
        'jenis',
        'isi_pengaduan',
        'id_instansi',
    ];

    /**
     * Relasi ke model Instansi (satu pengaduan milik satu instansi)
     */
    public function instansi()
    {
        return $this->belongsTo(InstansiModel::class, 'id_instansi');
    }
}
