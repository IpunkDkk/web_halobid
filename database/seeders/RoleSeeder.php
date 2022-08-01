<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'admin',
            'user_id' => 1
        ]);
        Role::create([
            'role' => 'bidan',
            'user_id' => 2
        ]);
        Role::create([
            'role' => 'kader',
            'user_id' => 3
        ]);
        Role::create([
            'role' => 'user',
            'user_id' => 4
        ]);
    }
}
