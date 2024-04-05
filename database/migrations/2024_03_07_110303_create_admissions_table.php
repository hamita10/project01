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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();
            $table->date('date')->nullable();
            $table->float('totalfees')->nullable();
            $table->float('feespaid')->nullable();
            $table->integer('instollmentmonth')->nullable();
            $table->string('student_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('age')->nullable();
            $table->string('qualification')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_no')->nullable();
            $table->string('father_qualification')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_no')->nullable();
            $table->string('mother_qualification')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('emergency_no')->nullable();
            $table->string('center_code')->nullable();
            $table->string('student_code')->nullable();
            $table->unsignedBigInteger('batch_id');
            $table->foreign('batch_id')->references('id')->on('batch_systems')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
