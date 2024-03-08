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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('status')->default(0);
            $table->integer('per_week')->default(0)->nullable();
            $table->integer('per_course')->default(0)->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('week_id')->nullable();
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('week_id')->references('id')->on('weeks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
