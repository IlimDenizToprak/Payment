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
        Schema::create('failed_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->timestamp('last_try_date')->nullable();
            $table->tinyInteger('failed_try');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_transactions');
    }
};
