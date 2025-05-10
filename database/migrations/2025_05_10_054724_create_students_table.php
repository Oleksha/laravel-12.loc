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
            $table->increments('id')->comment('Unique ID for student');
            $table->string('name')->nullable()->comment('Full name');
            $table->string('email')->nullable()->comment('Email address');
            $table->string('phone')->nullable()->comment('Contact number');
            $table->text('address')->nullable()->comment('Address');
            $table->date('date_of_birth')->nullable()->comment('Date of birth');
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
