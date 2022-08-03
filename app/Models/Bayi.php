<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bayi',
        'tmp_lahir',
        'tgl_lahir',
        'jk_bayi',
        'nama_ibu',
        'nama_ayah',
        'anak_ke',
        'brt_lahir',
        'pjg_lahir',
        'usia',
        // 'brt_sekarang',
        // 'pjg_sekarang',
        'ket_pemeriksaan',
        'posyandu_id'
    ];

    // public function medis()
    // {
    //     return $this->hasMany(Medis::class);
    // }
}
