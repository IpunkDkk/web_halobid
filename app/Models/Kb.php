<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'nik',
        'kk',
        'status',
        'alamat',
        'pekerjaan',
        'no_hp',
        'suami',
        'jml_anak',
        'tensi',
        'bb',
        'akseptor',
        'ket_pemeriksaan'
    ];

    public function pantaukb()
    {
        return $this->hasOne(pantaukb::class);
    }
}
