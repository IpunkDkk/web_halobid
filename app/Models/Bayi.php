<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bayi',
        'nik_bayi',
        'jk_bayi',
        'usia_bayi'
    ];

    // public function medis()
    // {
    //     return $this->hasMany(Medis::class);
    // }
}
