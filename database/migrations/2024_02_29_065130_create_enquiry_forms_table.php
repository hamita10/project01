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
        Schema::create('enquiry_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('number')->nullable();
            $table->string('Message')->nullable();
            $table->string('status')->default('pending')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiry_forms');
    }
};
