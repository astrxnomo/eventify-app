<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Seeder;

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
