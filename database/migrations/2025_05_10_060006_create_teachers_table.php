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
            $table->increments('teacher_id')->comment('Unique ID for teacher');
            $table->string('name')->comment('Full name');
            $table->string('email')->comment('Email address');
            $table->string('phone')->comment('Contact number');
            $table->string('specialization')->comment('Subject expertise');
            $table->date('joining_date')->comment('When the teacher joined');
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
