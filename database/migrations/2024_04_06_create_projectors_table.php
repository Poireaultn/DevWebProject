<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('room_name');
            $table->boolean('is_on')->default(false);
            $table->string('source')->default('HDMI1');
            $table->integer('brightness')->default(50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projectors');
    }
}; 