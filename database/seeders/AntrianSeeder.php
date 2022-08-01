<?php

namespace Database\Seeders;

use App\Models\Antrian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Antrian::create([
            'no_antrian' => 'P01',
            'ket_antrian' => 'Rujuk',
            'status' => 'Belum'
        ]);
    }
}
