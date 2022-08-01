<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantaubayi extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'bb_bayi',
        'tinggi_bayi',
        'ket_tambahan',
        'imunisasi',
        'vitamin',
        'bayi_id'
    ];

    public function bayi()
    {
        return $this->belongsTo(Bayi::class);
    }
}
