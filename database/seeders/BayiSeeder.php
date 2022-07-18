<?php

namespace Database\Seeders;

use App\Models\Bayi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BayiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bayi::create( [
            'nama_bayi' => 'Ahdan',
            'nik_bayi' => '3528130312990001',
            'jk_bayi' => 'L',
            'usia_bayi' => '2'
           ]) ;
    }
}
