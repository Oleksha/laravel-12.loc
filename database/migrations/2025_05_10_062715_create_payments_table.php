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
            $table->increments('id')->comment('Unique ID');
            $table->unsignedInteger('student_id')->comment('Who paid');
            $table->foreign('student_id')->references('id')->on('students');
            $table->decimal('amount')->comment('Amount paid');
            $table->date('payment_date')->comment('When paid');
            $table->string('payment_method')->comment('Cash, card, transfer, etc.');
            $table->text('notes')->comment('Any additional info');
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
