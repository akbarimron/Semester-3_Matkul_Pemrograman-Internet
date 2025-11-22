<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id('package_id');
            $table->unsignedBigInteger('coach_id')->nullable();
            $table->string('nama_paket', 100)->nullable();
            $table->integer('jumlah_sesi')->nullable();
            $table->integer('harga')->nullable();
            $table->string('durasi', 50)->nullable();
            
            $table->foreign('coach_id')
                ->references('coach_id')
                ->on('coaches')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
