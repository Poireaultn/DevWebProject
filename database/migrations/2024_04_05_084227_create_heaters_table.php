<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('heaters', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->boolean('is_on')->default(false);
            $table->float('current_temperature')->default(20);
            $table->float('target_temperature')->default(21);
            $table->enum('mode', ['chauffage', 'climatisation'])->default('chauffage');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('heaters');
    }
}; 