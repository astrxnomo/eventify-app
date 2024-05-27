<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'admin', 'label' => 'Administrator', 'description' => 'System Administrator']);
        Role::firstOrCreate(['name' => 'user', 'label' => 'User', 'description' => 'Regular User']);
    }
}
