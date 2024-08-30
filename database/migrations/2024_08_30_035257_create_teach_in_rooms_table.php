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
        Schema::create('teach_in_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->unsigned()
                ->foreign('teacher_id')
                ->reference('id')
                ->on('teachers')
                ->onDelete('no action');
            $table->unsignedBigInteger('room_id')->unsigned()
                ->foreign('room_id')
                ->reference('id')
                ->on('rooms')
                ->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teach_in_rooms');
    }
};
