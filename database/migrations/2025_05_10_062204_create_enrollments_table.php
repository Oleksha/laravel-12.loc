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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('enrollment_id')->comment('Unique ID');
            $table->unsignedInteger('student_id')->comment('Which student');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->unsignedInteger('class_id')->comment('Enrolled in which class');
            $table->foreign('class_id')->references('class_id')->on('classes');
            $table->date('enrollment_date')->comment('When enrolled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
