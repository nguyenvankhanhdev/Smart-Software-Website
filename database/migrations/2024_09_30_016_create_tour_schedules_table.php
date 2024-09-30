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
        Schema::create('tour_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->date('time_in_date')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('hotel')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('tour_detail_id')->constrained('tour_details','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_schedules');
    }
};
