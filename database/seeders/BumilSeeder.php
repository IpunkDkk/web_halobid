<?php

namespace Database\Seeders;

use App\Models\Bumil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BumilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bumil::create([
            'nama' => 'Livia',
            'tmp_lahir' => 'Pamekasan', 
            'tgl_lahir' => '1999-09-09', 
            'nik' => '3528130312990001', 
            'kk' => '3528130312990001', 
            'status' => 'Domisili Tetap', 
            'alamat' => 'Pasean', 
            'pekerjaan' => 'Dosen', 
            'no_hp' => '087866952551', 
            'suami' => 'Taufiqur RM', 
            'anak_ke' => '1', 
            'bb' => '140', 
            'tensi' => '180', 
            'usia_hamil' => '6', 
            'catatan_pemeriksaan' => 'Kondisi kandungan baik, Janin aktif' 
        ]);
    }
}
