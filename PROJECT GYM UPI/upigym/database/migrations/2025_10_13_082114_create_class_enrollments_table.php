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
        Schema::create('class_enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('class_id')->constrained('classes');
            $table->date('enrollment_date'); // Tanggal daftar
            $table->enum('status', ['enrolled', 'completed', 'cancelled'])->default('enrolled');
            $table->text('notes')->nullable(); // Catatan khusus
            $table->timestamps();
            
            // Mencegah user daftar kelas yang sama lebih dari sekali
            $table->unique(['user_id', 'class_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_enrollments');
    }
};
