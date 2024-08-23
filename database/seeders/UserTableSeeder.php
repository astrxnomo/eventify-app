<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
            'role_id' => 1,
        ]);
    }
}
