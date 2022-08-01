<?php

namespace Database\Seeders;

use App\Models\Persalinan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersalinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persalinan::create([
            'nama_ibu' => 'Livia',
            'umur_ibu' => '22',
            'alamat_ibu' => 'Tareta',
            'pekerjaan_suami' => 'Web Developer',
            'anak_ke' => '1',
            'usia_hamil' => '39-40 Mg',
            'tgl_lahir_anak' => '2022-09-09',
            'lama_jam' => '1 Jam',
            'keselamatan' => 'Selamat',
            'bb_anak' => '3200',
            'jk_anak' => 'L',
            'ket_persalinan' => 'Jam 23.00 WIB'
        ]);
    }
}
