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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
//            'name', 'name_en', 'coordinates', 'currently_available', 'trip_fee_percentage'
            $table->string('name');
            $table->string('name_en');
            $table->json('coordinates');
            $table->boolean('currently_available');
            $table->float('trip_fee_percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
