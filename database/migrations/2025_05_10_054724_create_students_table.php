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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id')->comment('Unique ID for student');
            $table->string('name')->comment('Full name');
            $table->string('email')->comment('Email address');
            $table->string('phone')->comment('Contact number');
            $table->text('address')->comment('Address');
            $table->date('date_of_birth')->comment('Date of birth');
            $table->date('registration_date')->comment('When the student joined');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
