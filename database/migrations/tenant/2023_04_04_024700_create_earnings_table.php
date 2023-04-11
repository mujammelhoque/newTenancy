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
        Schema::create('earnings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->double('basic',10,2)->nullable();
            $table->double('house_rent',10,2)->nullable();
            $table->double('medical',10,2)->nullable();
            $table->double('transportation',10,2)->nullable();
            $table->double('mobile',10,2)->nullable();
            $table->string('lumpsum')->nullable();


            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employees')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earnings');
    }
};
