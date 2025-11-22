<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id('coach_id');
            $table->string('nama_coach', 100);
            $table->text('deskripsi')->nullable();
            $table->string('foto', 255)->nullable();
            $table->boolean('available')->default(true);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
