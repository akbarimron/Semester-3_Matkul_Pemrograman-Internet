<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        \App\Models\User::create([
            'name' => 'Admin UPI Gym',
            'email' => 'admin@upigym.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        // Create sample members
        $users = [
            [
                'name' => 'Akbar Imron',
                'email' => 'akbar@gmail.com',
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Dinda Sari',
                'email' => 'dinda@gmail.com',
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Reza Pratama',
                'email' => 'reza@gmail.com',
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
