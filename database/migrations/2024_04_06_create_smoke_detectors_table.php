<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('smoke_detectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('room_name');
            $table->boolean('is_active')->default(true);
            $table->boolean('smoke_detected')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smoke_detectors');
    }
}; 