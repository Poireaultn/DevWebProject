<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('display_panels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('room');
            $table->string('status')->default('off');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('display_panels');
    }
}; 