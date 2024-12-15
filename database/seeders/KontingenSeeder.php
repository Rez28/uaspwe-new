<?php

namespace Database\Seeders;

use App\Models\Kontingen;
use App\Models\User;
use Illuminate\Database\Seeder;

class KontingenSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Pastikan ada user terlebih dahulu

        Kontingen::create([
            'user_id' => $user->id,
            'name' => 'Merpati Putih'
        ]);

        Kontingen::create([
            'user_id' => $user->id,
            'name' => 'Badak Merah'
        ]);
    }
}
