<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mybank', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('data_of_birth');
            $table->string('contact_number')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mybank');
    }
};