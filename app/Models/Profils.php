<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profils extends Model
{
    protected $table = 'profil';

    protected $fillable = [
        'visi',
        'misi',
    ];
}
