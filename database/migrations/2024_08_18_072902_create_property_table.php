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
            $table->id('property_id');
            $table->string('image_1');
            $table->string('property_title');
            $table->string('property_price');
            $table->string('discount');
            $table->string('property_tag');
            $table->string('address');
            $table->string('description');
            // Property Details
            $table->string('lot_area');
            $table->string('home_area');
            $table->string('lot_dimensions');
            $table->string('rooms');
            $table->string('beds');
            $table->string('baths');
            $table->string('veranda/balcony');
            $table->string('year_built');
            $table->string('property_status');
            $table->string('certificate');
            // Property Features
            $table->string('living_room');
            $table->string('garage');
            $table->string('dining_area');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('gym_area');
            $table->string('garden');
            $table->string('parking');
            // Property Gallery
            $table->string('image_2');
            $table->json('benefits');
            $table->string('link_location');
            $table->enum('status', ['Dijual', 'Terjual', 'Disewa', 'Tersewa']);
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
