<?php

namespace Database\Seeders;

use App\Models\Posyandu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posyandu::create([
            'nama' => 'Tareta',
            'no_telepon' => '087888666912',
            'alamat' => 'Tareta',
        ]);
        Posyandu::create([
            'nama' => 'Bunguplong',
            'no_telepon' => '085336104481',
            'alamat' => 'Bunguplong',
        ]);
        Posyandu::create([
            'nama' => 'Sumber Pinang',
            'no_telepon' => '085121290901',
            'alamat' => 'Sumber Pinang',
        ]);
    }
}
