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
        Role::firstOrCreate(['name' => 'Administrator', 'label' => 'admin', 'description' => 'System Administrator']);
        Role::firstOrCreate(['name' => 'User', 'label' => 'user', 'description' => 'Regular User']);
    }
}
