<?php

namespace Database\Seeders;

use App\Models\Bidan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Bidan::create( [
        'nama_bidan' => 'Livia',
        'alamat' => 'Pasean',
        'no_str' => '01234',
        'no_hp' => '087886952551',
        'pendidikan' => 'S1 - Kebidanan',
        'foto' => '1.jpg'
       ]) ;
    }
}