<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $table = 'penghargaan';
    protected $fillable = ['judul', 'gambar'];
}
