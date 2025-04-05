<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total_spots');
            $table->integer('handicap_spots');
            $table->integer('available_spots');
            $table->integer('available_handicap_spots');
            $table->boolean('is_open');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parkings');
    }
}; 