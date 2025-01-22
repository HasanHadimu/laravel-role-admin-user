<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'), // Hash password
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'), // Hash password
            'role' => 'user',
        ]);

        User::factory()->create([
            'name' => 'dosen',
            'email' => 'dosen@gmail.com',
            'password' => Hash::make('12345678'), // Hash password
            'role' => 'dosen',
        ]);
    }
}
