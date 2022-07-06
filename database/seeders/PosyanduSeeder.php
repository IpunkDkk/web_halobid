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
            'nama' => 'Pasean',
            'no_telepon' => '123',
            'alamat' => 'Pasean',
            'bidan_id' => 1
        ]);
    }
}
