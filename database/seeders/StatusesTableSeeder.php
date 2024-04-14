<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'Disponible',
            'Agotado',
            'Cancelado',
            'Finalizado',
        ];

        foreach ($statuses as $status) {
            DB::table('statuses')->insert([
                'name' => $status,
            ]);
        }
    }
}
