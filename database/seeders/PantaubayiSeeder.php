<?php

namespace Database\Seeders;

use App\Models\Pantaubayi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PantaubayiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pantaubayi::create([
            'bb_bayi' => 3,
            'tinggi_bayi' => 60,
            'imunisasi' => 'Hepatitis B',
            'vitamin' => 'Susu Beruang',
            'ket_tambahan' => 'Bayi Sehat',
            'bayi_id' => 1
        ]);
    }
}
