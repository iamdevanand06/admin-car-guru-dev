<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_diamensions', function (Blueprint $table) {
            $table->id();
            $table->float('length_mm');
            $table->float('weight_mm');
            $table->float('height_mm');
            $table->float('wheel_base_mm');
            $table->float('kerb_weight_kg');
            $table->float('fuel_tank_ltr');
            $table->string('car_engine_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_diamensions');
    }
};
