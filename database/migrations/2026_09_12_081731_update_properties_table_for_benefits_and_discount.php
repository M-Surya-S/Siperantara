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
        Schema::table('property', function (Blueprint $table) {
            $table->text('benefits')->nullable()->change();
            $table->string('discount')->nullable()->default('0')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property', function (Blueprint $table) {
            $table->json('benefits')->change();
            $table->string('discount')->nullable()->default(null)->change();
        });
    }
};
