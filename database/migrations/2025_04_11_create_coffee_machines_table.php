<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('coffee_machines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('room_name');
            $table->boolean('is_on')->default(true);
            $table->json('products');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffee_machines');
    }
}; 