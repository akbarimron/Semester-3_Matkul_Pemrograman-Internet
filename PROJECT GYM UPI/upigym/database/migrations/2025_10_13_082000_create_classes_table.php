<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kelas (Yoga, Cardio, etc)
            $table->text('description')->nullable();
            $table->foreignId('trainer_id')->constrained('trainers');
            $table->time('start_time'); // Jam mulai
            $table->time('end_time'); // Jam selesai
            $table->json('days'); // Hari-hari kelas (senin, selasa, dst)
            $table->integer('max_participants'); // Maksimal peserta
            $table->decimal('price', 8, 2)->nullable(); // Harga kelas (jika berbayar)
            $table->string('difficulty_level'); // Beginner, Intermediate, Advanced
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
