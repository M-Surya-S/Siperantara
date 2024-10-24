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
        Schema::create('property', function (Blueprint $table) {
            $table->string('property_id')->primary();
            $table->json('image');
            $table->string('property_title');
            $table->string('property_price');
            $table->string('discount')->nullable();
            $table->string('property_tag');
            $table->string('property_category');
            $table->string('featured');
            $table->string('address');
            $table->text('description');
            // Property Details
            $table->string('lot_area');
            $table->string('home_area');
            $table->string('lot_dimensions')->nullable();
            $table->string('rooms');
            $table->string('beds');
            $table->string('baths');
            $table->string('floors');
            $table->string('year_built');
            $table->string('property_status');
            $table->string('certificate');
            // Property Features
            $table->string('living_room')->nullable();
            $table->string('garage')->nullable();
            $table->string('dining_area')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('gym_area')->nullable();
            $table->string('garden')->nullable();
            $table->string('parking')->nullable();
            // Property Gallery
            $table->json('benefits');
            $table->string('link_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
