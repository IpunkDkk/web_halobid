<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persalinan extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nama_ibu',
        'umur_ibu',
        'alamat_ibu',
        'pekerjaan_suami',
        'anak_ke',
        'usia_hamil',
        'tgl_lahir_anak',
        'lama_jam',
        'keselamatan',
        'bb_anak',
        'jk_anak',
        'ket_persalinan'
    ];
}