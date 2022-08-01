<?php

namespace Database\Seeders;

use App\Models\Pantaukb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PantaukbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pantaukb::create([
            'tensi_kb' => '110 mmHG',
            'bb_kb' => '70 Kg',
            'akseptor_kb' => 'KB Pil',
            'ket_tambahan' => 'Pertama menggunakan Pil KB, mutasi dari Spiral',
            'kb_id' => 1
        ]);
    }
}
