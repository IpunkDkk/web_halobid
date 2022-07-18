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
            'name' => 'Taufiq',
            'username' => 'admin',
            'email' => 'taufiq@uim.ac.id',
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Taufiq1',
            'username' => 'admin1',
            'email' => 'taufiq1@uim.ac.id',
            'password' => Hash::make('admin')
        ]);
    }
}
