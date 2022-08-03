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
            'role' => 'superadmin',
            'user_id' => 3
        ]);
        Role::create([
            'role' => 'admin',
            'user_id' => 2
        ]);
        Role::create([
            'role' => 'admin',
            'user_id' => 4
        ]);
    }
}
