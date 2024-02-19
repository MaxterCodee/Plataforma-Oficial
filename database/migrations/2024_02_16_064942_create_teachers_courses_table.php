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
        Schema::create('teachers_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id' );
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_courses');
    }
};
