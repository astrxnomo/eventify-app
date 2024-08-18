<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Event;
use App\Models\Location;
use App\Models\User;
use App\Models\ticket;
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


        // Crear un usuario administrador base
        $adminRole = Role::where('name', 'admin')->first();

        $adminUser = User::firstOrCreate([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'role_id' => $adminRole->id,
        ]);
        Log::info('Usuario administrador creado:', $adminUser->toArray());


        User::factory()->count(5)->create();
        Location::factory()->count(30)->create();
        Event::factory()->count(30)->create();
        ticket::factory()->count(10)->create();

    }
}
