<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic',
                'description' => 'Paket dasar untuk akses gym dan fasilitas standar',
                'price' => 150000,
                'duration_days' => 30,
                'features' => [
                    'Akses gym 24/7',
                    'Loker gratis',
                    'Konsultasi dasar dengan trainer'
                ],
                'is_active' => true
            ],
            [
                'name' => 'Premium',
                'description' => 'Paket lengkap dengan kelas grup dan trainer personal',
                'price' => 300000,
                'duration_days' => 30,
                'features' => [
                    'Semua fasilitas Basic',
                    'Akses semua kelas grup',
                    '2x sesi personal trainer per bulan',
                    'Protein shake gratis',
                    'Program nutrisi dasar'
                ],
                'is_active' => true
            ],
            [
                'name' => 'VIP',
                'description' => 'Paket premium dengan layanan eksklusif',
                'price' => 500000,
                'duration_days' => 30,
                'features' => [
                    'Semua fasilitas Premium',
                    'Unlimited personal trainer',
                    'Program nutrisi personal',
                    'Akses sauna dan spa',
                    'Massage therapy 2x per bulan',
                    'Prioritas booking kelas'
                ],
                'is_active' => true
            ]
        ];

        foreach ($plans as $plan) {
            \App\Models\MembershipPlan::create($plan);
        }
    }
}
