<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumil extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'anak_ke', 
        'bb', 
        'tensi', 
        'usia_hamil', 
        'catatan_pemeriksaan'
    ];

    public function pantaubumil()
    {
        return $this->hasOne(Pantaubumil::class);
    }
}
