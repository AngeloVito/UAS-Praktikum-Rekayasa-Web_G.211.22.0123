<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // Tambahkan atribut yg akan diisi
    protected $fillable = [
        'nama_dosen',      // Nama dosen
        'nidn',     // NIDN dosen
        'mata_kuliah',    // Mata kuliah
    ];
}
