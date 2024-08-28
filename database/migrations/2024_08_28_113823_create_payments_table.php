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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->double('price' , 16 ,4)->default(0);
            $table->date('expire_date')->nullable();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('subject_id')
                ->unsigned()
                ->foreign('subject_id')
                ->references('id')
                ->on('subjects')
                ->onDelete('no action');
            $table->unsignedBigInteger('user_id')
                ->unsigned()
                ->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('payments');
    }
};
