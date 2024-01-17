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
        Schema::create('card_infoes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('card_name', 50);
            $table->string('card_number', 16);
            $table->tinyInteger('exp_month');
            $table->tinyInteger('exp_year');
            $table->integer('cvv_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_infoes');
    }
};
