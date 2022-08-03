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
            UserSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
