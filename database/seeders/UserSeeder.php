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
            'name' => 'Admin',
            'username' => 'superadmin',
            'email' => 'admin@halobid.com',
            'posyandu_id' => 2,
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Hariyanto',
            'username' => 'admin',
            'email' => 'tareta@halobid.com',
            'posyandu_id' => 1,
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Zuhri',
            'username' => 'admin',
            'email' => 'bungguplong@halobid.com',
            'posyandu_id' => 2,
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Fajar',
            'username' => 'admin',
            'email' => 'sumberpinang@halobid.com',
            'posyandu_id' => 3,
            'password' => Hash::make('admin')
        ]);
    }
}
