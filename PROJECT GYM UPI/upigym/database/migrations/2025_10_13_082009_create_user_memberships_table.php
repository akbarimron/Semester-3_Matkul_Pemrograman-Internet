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
        Schema::create('user_memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('membership_plan_id')->constrained('membership_plans');
            $table->date('start_date'); // Tanggal mulai membership
            $table->date('end_date'); // Tanggal berakhir membership
            $table->enum('status', ['active', 'expired', 'suspended'])->default('active');
            $table->decimal('amount_paid', 10, 2); // Jumlah yang dibayar
            $table->string('payment_method')->nullable(); // Metode pembayaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_memberships');
    }
};
