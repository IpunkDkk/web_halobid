<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'judul _konsultasi',
        'isi_pesan',
        'bidan_id',
        'user_id',
    ];

    public function bidan()
    {
        return $this->belongsTo(Bidan::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
