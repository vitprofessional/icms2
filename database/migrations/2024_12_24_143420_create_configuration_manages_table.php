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
        Schema::create('configuration_manages', function (Blueprint $table) {
            $table->id();
            $table->string('institute')->nullable();
            $table->string('location')->nullable();
            $table->string('mail')->nullable();
            $table->string('mobile')->nullable();
            $table->string('userId')->nullable();
            $table->string('pass')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration_manages');
    }
};
