<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantaubumil extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'tensi',
        'bb',
        'usia',
        'ket_pemeriksaan',
        'bumil_id'
    ];

    public function bumil()
    {
        return $this->belongsTo(Bumil::class);
    }
}
