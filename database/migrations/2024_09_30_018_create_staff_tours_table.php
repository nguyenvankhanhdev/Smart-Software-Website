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
        Schema::create('staff_tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staffs','id')->cascadeOnDelete();
            $table->foreignId('tour_schedule_id')->constrained('tour_schedules','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_tours');
    }
};
