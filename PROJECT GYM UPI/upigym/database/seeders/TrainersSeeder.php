<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainers = [
            [
                'name' => 'Ahmad Fitri',
                'email' => 'ahmad.fitri@upigym.com',
                'phone' => '+62812345678',
                'bio' => 'Certified personal trainer dengan spesialisasi strength training dan bodybuilding. Berpengalaman 8 tahun dalam membantu klien mencapai target fitness mereka.',
                'specializations' => ['Strength Training', 'Bodybuilding', 'Weight Loss'],
                'experience_years' => 8,
                'is_active' => true
            ],
            [
                'name' => 'Sari Indah',
                'email' => 'sari.indah@upigym.com',
                'phone' => '+62823456789',
                'bio' => 'Yoga instructor bersertifikat internasional. Mengajar berbagai jenis yoga dari Hatha hingga Vinyasa Flow.',
                'specializations' => ['Yoga', 'Pilates', 'Flexibility', 'Mind-Body Connection'],
                'experience_years' => 6,
                'is_active' => true
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@upigym.com',
                'phone' => '+62834567890',
                'bio' => 'Former athlete yang kini fokus pada functional training dan rehabilitation. Ahli dalam membantu recovery dari cedera.',
                'specializations' => ['Functional Training', 'Rehabilitation', 'Sports Performance'],
                'experience_years' => 10,
                'is_active' => true
            ],
            [
                'name' => 'Maya Puspita',
                'email' => 'maya.puspita@upigym.com',
                'phone' => '+62845678901',
                'bio' => 'Cardio specialist dan Zumba instructor. Energik dan passionate dalam membantu klien mencapai kebugaran kardio optimal.',
                'specializations' => ['Cardio Training', 'Zumba', 'Dance Fitness', 'HIIT'],
                'experience_years' => 5,
                'is_active' => true
            ]
        ];

        foreach ($trainers as $trainer) {
            \App\Models\Trainer::create($trainer);
        }
    }
}
