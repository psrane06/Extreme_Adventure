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
        Schema::create('data_elements', function (Blueprint $table) {
            $table->id();
            $table->integer('earning');
            $table->integer('switch_earning');
            $table->integer('conversion_bookings');
            $table->integer('conversion_views');
            $table->integer('switch_credits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_elements');
    }
};
