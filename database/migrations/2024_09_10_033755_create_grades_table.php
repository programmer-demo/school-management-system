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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade')->nullable();
            $table->unsignedBigInteger('student_id')->unsigned()
                ->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('no action');
            $table->unsignedBigInteger('subject_id')->unsigned()
                ->foreign('subject_id')
                ->references('id')
                ->on('subjects')
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
        Schema::dropIfExists('grades');
    }
};
