<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\event;
use App\Models\location;
use App\Models\User;
use App\Models\ticket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(UserTableSeeder::class);

        User::factory()->count(5)->create();
        Location::factory()->count(30)->create();
        Event::factory()->count(30)->create();

    }
}
