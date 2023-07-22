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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('biker_id')->nullable();
            $table->enum('status', []);
            $table->string('description');
            $table->unsignedInteger('fee');
            $table->float('source_latitude');
            $table->float('source_longitude');
            $table->float('destination_latitude');
            $table->float('destination_longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
