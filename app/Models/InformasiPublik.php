<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiPublik extends Model
{
    protected $table = 'informasi_publik';

    protected $fillable = [
        'judul',
        'kategori',
        'tahun',
        'file_path',
    ];
}
