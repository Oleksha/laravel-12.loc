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
            $table->increments('id')->comment('Unique ID for teacher');
            $table->string('name')->nullable()->comment('Full name');
            $table->string('email')->nullable()->comment('Email address');
            $table->string('phone')->nullable()->comment('Contact number');
            $table->string('specialization')->nullable()->comment('Subject expertise');
            $table->date('joining_date')->nullable()->comment('When the teacher joined');
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
