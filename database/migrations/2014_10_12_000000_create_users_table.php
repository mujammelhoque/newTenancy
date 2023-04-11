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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('org_id')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('org_name')->unique()->nullable();
            $table->string('org_domain')->unique()->nullable();
            
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();

            $table->string('status')->default(0)->comment(['0=pending','1=approved']);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
