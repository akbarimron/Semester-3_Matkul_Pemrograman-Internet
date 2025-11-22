<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id('request_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->enum('status', ['pending', 'admin_approved', 'coach_approved', 'rejected'])->default('pending');
            $table->text('catatan')->nullable();
            $table->timestamp('created_at')->useCurrent();
            
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
                
            $table->foreign('package_id')
                ->references('package_id')
                ->on('packages')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
