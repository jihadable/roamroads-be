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
        Schema::create('flights', function (Blueprint $table) {
            $table->string("type");
            $table->string("airline");
            $table->string("seat");
            $table->mediumInteger("price");

            $table->string("departure_city");
            $table->string("arrival_city");
            
            $table->time("departure_time");
            $table->time("arrival_time");
            
            $table->integer("transit_number");
            $table->time("transit_arrival_time")->nullable();
            $table->time("transit_departure_time")->nullable();
            $table->string("transit_city")->nullable();

            $table->json("facilities");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
