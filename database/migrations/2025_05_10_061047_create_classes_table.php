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
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id')->comment('Unique class/session ID');
            $table->unsignedInteger('subject_id')->comment('Links to Subject');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->unsignedInteger('teacher_id')->comment('Who is teaching');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->dateTime('start_time')->comment('When the class starts');
            $table->dateTime('end_time')->comment('When it ends');
            $table->string('room_number')->nullable()->comment('Where it takes place (optional)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
