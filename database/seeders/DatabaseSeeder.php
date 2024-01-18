<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        User::create([
            'name' => 'admin',
            'email' => 'Kajongandesaku@gmail.com',
            'password' => 'K4j0n94n'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'Kajongankajen@gmail.com',
            'password' => 'K4j0n94n'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'kknundip@gmail.com',
            'password' => 'Kajongan45hari'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
