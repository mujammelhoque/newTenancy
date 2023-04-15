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
        Schema::create('tenant_earning_deductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_employee_id');
            $table->double('gross_salary',10,2)->nullable();
            $table->double('basic',10,2)->nullable();
            $table->double('house_rent',10,2)->nullable();
            $table->double('medical',10,2)->nullable();
            $table->double('transportation',10,2)->nullable();
            $table->double('mobile',10,2)->nullable();
            $table->string('lumpsum')->nullable();

            $table->double('income_tax',6,2)->nullable();
            $table->double('absence',6,2)->nullable();
            $table->double('advance',10,2)->nullable();
            $table->double('loan',10,2)->nullable();

            $table->timestamps();

            $table->foreign('tenant_employee_id')->references('id')->on('tenant_employees')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_earning_deductions');
    }
};
