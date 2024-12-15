<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin', // Role bisa 'admin' atau 'official'
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Official User',
            'email' => 'official@example.com',
            'password' => Hash::make('password'),
            'role' => 'official', // Role bisa 'admin' atau 'official'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
