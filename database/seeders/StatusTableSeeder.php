<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        Status::create(['name' => 'Disponible']);
        Status::create(['name' => 'Agotado']);
        Status::create(['name' => 'Finalizado']);
    }
}
