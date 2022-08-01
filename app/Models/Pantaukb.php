<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantaukb extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'tensi_kb',
        'bb_kb',
        'akseptor_kb',
        'ket_tambahan',
        'kb_id'
    ];
}
