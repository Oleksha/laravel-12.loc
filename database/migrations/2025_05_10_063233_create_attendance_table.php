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
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('attendance_id')->comment('Unique ID');
            $table->unsignedInteger('student_id')->comment('Student attending');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->unsignedInteger('class_id')->comment('Which class');
            $table->foreign('class_id')->references('class_id')->on('classes');
            $table->date('date')->comment('Attendance date');
            $table->string('status')->comment('Present/Absent/Late');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
