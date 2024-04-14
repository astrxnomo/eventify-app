<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Deportivo',
            'Concierto',
            'Cultural',
            'Fiesta',
            'Gastronómico',
            'Musical',
            'Teatro',
            'Turístico',
            'Social',
            'Religioso',
            'Académico',
            'Político',
            'Empresarial',
            'Tecnológico',
            'Salud',
            'Moda',
            'Arte',
            'Cine',
            'Literatura',
            'Danza',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
