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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('banner_id')->nullable();
            $table->integer('set')->nullable();
            $table->string('banner_web')->nullable();   // Web banner image path
            $table->string('banner_mob')->nullable(); // Mobile banner image path
            $table->boolean('status')->default('0');
            $table->string('banner_url')->nullable();         // Banner link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisments');
    }
};
