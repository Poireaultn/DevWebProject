<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('lights', function (Blueprint $table) {
            $table->renameColumn('room', 'room_name');
        });
    }

    public function down()
    {
        Schema::table('lights', function (Blueprint $table) {
            $table->renameColumn('room_name', 'room');
        });
    }
}; 