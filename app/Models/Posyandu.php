<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'no_telepon', 'alamat', 'bidan_id'];

    public function bidan()
    {
        return $this->belongsTo(Bidan::class);
    }
}
