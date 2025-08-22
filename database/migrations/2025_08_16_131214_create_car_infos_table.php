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
        Schema::create('car_infos', function (Blueprint $table) {
            $table->id();
            $table->string('car_id')->unique();
            $table->string('car_info_category');
            $table->integer('car_info_price');
            $table->string('car_info_location');
            $table->string('car_info_registration_type');
            $table->string('car_info_registration_number');
            $table->string('car_info_registration_date');
            $table->string('car_info_car_make_year');
            $table->string('car_info_exterior_color');
            $table->string('interior_color');
            $table->integer('number_of_keys');
            $table->string('mileage');
            $table->string('engine_number');
            $table->string('chassis_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_info');
    }
};
