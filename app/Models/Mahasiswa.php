<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Kolom-kolom yang bisa diisi (mass assignable)
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'gender',
        'alamat',
    ];
}
