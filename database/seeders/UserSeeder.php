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
            'email' => 'admin@halobid.com',
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Nasidatul Q',
            'username' => 'bidan',
            'email' => 'bidan@halobid.com',
            'password' => Hash::make('bidan')
        ]);
        User::create([
            'name' => 'Titin',
            'username' => 'kader',
            'email' => 'kader@halobid.com',
            'password' => Hash::make('kader')
        ]);
        User::create([
            'name' => 'Ani',
            'username' => 'user',
            'email' => 'user@halobid.com',
            'password' => Hash::make('user')
        ]);
    }
}
