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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('diploma')->nullable();// bằng cấp
            $table->decimal('salary', 10, 2)->nullable();
            $table->date('date_of_entry')->nullable();
            $table->foreignId('depart_id')->constrained('departments','id')->cascadeOnDelete();
            $table->string('fullname')->nullable();
            $table->string('sex')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
