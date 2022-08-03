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
            'tmp_lahir' => 'Pamekasan',
            'tgl_lahir' => '2020-02-20',
            'jk_bayi' => 'L',
            'nama_ibu' => 'Siti',
            'nama_ayah' =>'Ahmad',
            'anak_ke' => '3',
            'brt_lahir' => '1',
            'pjg_lahir' => '60',
            'usia' => '2tahun, 0bulan, 10hari',
            'ket_pemeriksaan' => 'Bayi Sehat, aktif',
            'posyandu_id' => 1,
           ]) ;
    }
}

