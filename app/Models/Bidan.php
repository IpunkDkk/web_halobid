<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    use HasFactory;

    protected $fillable = [ 'nama_bidan', 'alamat', 'no_str', 'no_hp', 'pendidikan', 'foto' ];
}
