<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id('announcement_id');
            $table->string('judul', 255)->nullable();
            $table->text('konten')->nullable();
            $table->timestamp('tanggal_posting')->useCurrent();
            $table->unsignedBigInteger('admin_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
