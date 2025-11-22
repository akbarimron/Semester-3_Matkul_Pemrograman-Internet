<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coach_clients', function (Blueprint $table) {
            $table->id('cc_id');
            $table->unsignedBigInteger('coach_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            
            $table->foreign('coach_id')
                ->references('coach_id')
                ->on('coaches')
                ->onDelete('no action')
                ->onUpdate('no action');
                
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coach_clients');
    }
};
