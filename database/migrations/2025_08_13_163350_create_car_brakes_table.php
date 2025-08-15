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
        Schema::create('car_brakes', function (Blueprint $table) {
            $table->id();
            $table->string('brake_front');
            $table->string('brake_rear');
            $table->string('suspension_front');
            $table->string('suspension_back');
            $table->string('steering');
            $table->string('wheel_type_front');
            $table->string('wheel_type_rear');
            $table->string('wheel_type_front_rims');
            $table->string('wheel_type_rear_rims');
            $table->string('features_equipments');
            $table->string('car_diamension_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_brakes');
    }
};
