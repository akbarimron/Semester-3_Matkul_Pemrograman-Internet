<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gym_visits', function (Blueprint $table) {
            $table->id('visit_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('tipe_pengunjung', ['mahasiswa_upi', 'umum']);
            $table->integer('biaya');
            $table->date('tanggal_kunjungan');
            $table->timestamp('waktu_bayar')->useCurrent();
            
            $table->index('tanggal_kunjungan', 'idx_tanggal');
            
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gym_visits');
    }
};
