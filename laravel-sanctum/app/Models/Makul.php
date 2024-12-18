<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    // Tambahkan atribut yang bisa diisi secara mass assignment
    protected $fillable = [
        'nama_makul',      // Nama mata kuliah
        'id_makul',     // Id mata kuliah
        'semester',    // Semester mata kuliah
    ];
}
