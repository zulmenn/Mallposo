<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_instansi',
        'nama_lengkap',
        'jenis_kelamin',
        'no_hp',
        'maksud_tujuan',
        'alamat',
    ];

    public function instansi()
    {
        return $this->belongsTo(InstansiModel::class, 'id_instansi');
    }
}
