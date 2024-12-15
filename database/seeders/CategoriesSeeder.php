<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        Categories::create(['name' => 'Tanding Putra', 'type' => 'tanding']);
        Categories::create(['name' => 'Tanding Putri', 'type' => 'tanding']);
        Categories::create(['name' => 'Seni Tunggal', 'type' => 'seni']);
        Categories::create(['name' => 'Seni Ganda', 'type' => 'seni']);
    }
    
}
