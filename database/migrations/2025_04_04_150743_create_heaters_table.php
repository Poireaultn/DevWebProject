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
        Schema::create('heaters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_on')->default(false);
            $table->decimal('temperature', 3, 1)->default(20.0);
            $table->enum('mode', ['chauffage', 'climatisation'])->default('chauffage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heaters');
    }
};
