<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // khách hàng
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('sex')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
