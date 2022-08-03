<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Taufiqur RM',
            'username' => 'admin',
            'email' => 'tareta@halobid.com',
            'posyandu_id' => 1,
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Taufiqur RM',
            'username' => 'admin',
            'email' => 'bungguplong@halobid.com',
            'posyandu_id' => 2,
            'password' => Hash::make('admin')
        ]);

        User::create([
            'name' => 'Taufiqur RM',
            'username' => 'superadmin',
            'email' => 'admin@halobid.com',
            'posyandu_id' => 2,
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Taufiqur RM',
            'username' => 'admin',
            'email' => 'sumberpinang@halobid.com',
            'posyandu_id' => 3,
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Nasidatul Q',
            'username' => 'bidan',
            'email' => 'bidan@halobid.com',
            'posyandu_id' => 2,
            'password' => Hash::make('bidan')
        ]);
        User::create([
            'name' => 'Titin',
            'username' => 'kader',
            'email' => 'kader@halobid.com',
            'posyandu_id' => 2,
            'password' => Hash::make('kader')
        ]);
        User::create([
            'name' => 'Ani',
            'username' => 'user',
            'email' => 'user@halobid.com',
            'posyandu_id' => 1,
            'password' => Hash::make('user')
        ]);
    }
}
