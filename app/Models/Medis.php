<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medis extends Model
{
    use HasFactory;

    protected $fillable = ['bayi_id', 'petugas_id', 'tindakan', 'diagnosa'];

    // public function bayi()
    // {
    //     return $this->belongsTo(Bayi::class);
    // }

    // public function petugas()
    // {
    //     return $this->belongsTo(Petugas::class);
    // }
}
