<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create Test User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create Regular Users
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create 10 Random Users using Factory
        User::factory(10)->create();

        // Output success message
        $this->command->info('✅ Database seeded successfully!');
        $this->command->info('📧 Admin: admin@example.com | Password: password123');
        $this->command->info('📧 Test: test@example.com | Password: password123');
        $this->command->info('📊 Total Users Created: ' . User::count());
    }
}
