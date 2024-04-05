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
        Schema::create('asigns', function (Blueprint $table) {
            $table->id();
            $table->string('pc_no')->nullable();
            $table->bigInteger('student_id')->unsigned()->nullable();
            $table->foreign('student_id')->references('id')->on('admissions')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('teacher_id')->unsigned()->nullable();
            $table->foreign('teacher_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('subject_id')->unsigned()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('batch_time')->unsigned()->nullable();
            $table->foreign('batch_time')->references('id')->on('batch_systems')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asigns');
    }
};
