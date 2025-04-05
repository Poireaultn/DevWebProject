<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bike_parkings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total_spots');
            $table->integer('available_spots');
            $table->boolean('is_open');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bike_parkings');
    }
}; 