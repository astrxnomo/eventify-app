<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Musical']);
        Category::create(['name' => 'Teatro']);
        Category::create(['name' => 'Deportivo']);
        Category::create(['name' => 'Cultural']);
        Category::create(['name' => 'Familiar']);
        Category::create(['name' => 'Gastronómico']);
    }
}
