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
           'nama_bidan' => 'Nasidatul Qamariyah, Amd.Keb',
           'alamat' => 'Sana tengah',
           'no_str' => '01234',
           'no_hp' => '081703991999',
           'pendidikan' => 'S1 - Kebidanan',
           'foto' => '1.jpg',
           'posyandu_id' => 1
       ]) ;
        Bidan::create( [
            'nama_bidan' => 'Nasidatul Qamariyah, Amd.Keb',
            'alamat' => 'Sana tengah',
            'no_str' => '01234',
            'no_hp' => '081703991999',
            'pendidikan' => 'S1 - Kebidanan',
            'foto' => '1.jpg',
            'posyandu_id' => 1
        ]) ;
    }
}
