<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('hotels', function (Blueprint $table) {
            $table->string("name");
            $table->string("image");
            $table->integer("stars");
            $table->mediumInteger("price");
            $table->string("city");
            $table->json("facilities");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
