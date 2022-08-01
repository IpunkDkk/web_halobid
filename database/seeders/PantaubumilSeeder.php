<?php

namespace Database\Seeders;

use App\Models\Pantaubumil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PantaubumilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pantaubumil::create([
            'tensi' => 120,
            'bb' => 50,
            'usia' => 30,
            'ket_pemeriksaan' => 'Kandungan Baik',
            'bumil_id' => 1
        ]);
    }
}
