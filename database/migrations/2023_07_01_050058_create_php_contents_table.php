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
        Schema::create('php_contents', function (Blueprint $table) {
            $table->id('content_id');
            $table->integer('sub_code')->default(0000);
            $table->string('headline', 255)->nullable(false);
            $table->string('summary', 2000)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('php_contents');
    }
};