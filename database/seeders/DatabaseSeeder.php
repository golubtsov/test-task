<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'Test User Admin',
             'email' => 'test@example.com',
             'role_id' => config('products.role.admin'),
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User Simple',
            'email' => 'simple@example.com',
        ]);
    }
}
