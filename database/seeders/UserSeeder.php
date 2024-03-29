<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User One',
            'email' => 'user1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Admin One',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 1
        ]);
    }
}
