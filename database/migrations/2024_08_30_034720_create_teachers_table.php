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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('subject_id')->unsigned()
                ->foreign('subject_id')
                ->reference('id')
                ->on('subjects')
                ->onDelete('no action');
            $table->unsignedBigInteger('student_id')->unsigned()
                ->foreign('student_id')
                ->reference('id')
                ->on('students')
                ->onDelete('no action');
            $table->unsignedBigInteger('room_id')->unsigned()
                ->foreign('room_id')
                ->reference('id')
                ->on('teach_in_rooms')
                ->onDelete('no action');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
