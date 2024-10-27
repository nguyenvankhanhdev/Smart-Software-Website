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
        Schema::create('tour_cancels', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('refunds',15,0);
            $table->dateTime('date_cancel');
            $table->string('reason_cancel',1000);
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_cancels');
    }
};
