<?php

namespace Database\Seeders;

use App\Models\Pantaubayi;
use App\Models\Pantaubumil;
use App\Models\Pantaukb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            PosyanduSeeder::class,
            BidanSeeder::class,
            UserSeeder::class,
//            PasienSeeder::class,
//            MitraSeeder::class,
//            LayananSeeder::class,
//            BlogSeeder::class,
//            KonsultasiSeeder::class,
            BayiSeeder::class,
//            ImunisasiSeeder::class,
//            ObatSeeder::class,
//            MedisSeeder::class,
//            PetugasSeeder::class,
            RoleSeeder::class,
//            PersalinanSeeder::class,
            BumilSeeder::class,
            KbSeeder::class,
            PantaubumilSeeder::class,
            PantaubayiSeeder::class,
            PantaukbSeeder::class,
            AntrianSeeder::class
        ]);
    }
}
