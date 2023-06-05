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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('email')->unique()->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('next_of_kin');
            $table->string('next_of_kin_number');
            $table->string('next_of_kin_address');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('patient_id')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
