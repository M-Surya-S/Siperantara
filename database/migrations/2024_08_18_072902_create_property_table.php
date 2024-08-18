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
            $table->string('lot_area');
            $table->string('home_area');
            $table->string('lot_dimensions');
            $table->string('lot_dimension');
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
