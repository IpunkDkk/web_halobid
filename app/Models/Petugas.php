<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nama_petugas',
        'alamat_petugas',
        'jk_petugas',
        'no_petugas'
    ];

    // public function medis()
    // {
    //     return $this->hasMany(Medis::class);
    // }
}
