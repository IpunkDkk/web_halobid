<?php

namespace Database\Seeders;

use App\Models\Kb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kb::create([
            'nama' => 'Livia', 
            'tmp_lahir' => 'Pamekasan', 
            'tgl_lahir' => '1999-09-09', 
            'nik' => '3528130312990001', 
            'kk' => '352813031299002', 
            'status' => 'Domisili Tetap', 
            'alamat' => 'Sana tengah', 
            'pekerjaan' => 'Dosen', 
            'no_hp' => '087886952551', 
            'suami' => 'Taufiqur RM', 
            'jml_anak' => '5', 
            'tensi' => '120', 
            'bb' => '50', 
            'akseptor' => 'KB Pil',
            'ket_pemeriksaan' => 'Pertama menggunakan Pil KB'
        ]);
    }
}
