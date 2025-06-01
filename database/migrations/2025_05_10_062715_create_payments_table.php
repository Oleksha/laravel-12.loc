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
            $table->unsignedInteger('student_id')->nullable()->comment('Who paid');
            $table->foreign('student_id')->references('id')->on('students');
            $table->decimal('amount')->nullable()->comment('Amount paid');
            $table->date('payment_date')->nullable()->comment('When paid');
            $table->string('payment_method')->nullable()->comment('Cash, card, transfer, etc.');
            $table->text('notes')->nullable()->comment('Any additional info');
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
