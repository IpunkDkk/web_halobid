<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['pasien-id', 'bidan_id', 'layanan_id', 'keluhan', 'saran'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function bidan()
    {
        return $this->belongsTo(Bidan::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
