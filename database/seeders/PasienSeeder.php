<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasien::create( [
            'nama_pasien' => 'Livia',
            'nik' => '3528130312990001',
            'alamat'=> 'Pasian',
            'Jenis_kelamin' => 'P',
            'usia' => '21',
            'no_hp' => '123'
           ]) ;
    }
}
