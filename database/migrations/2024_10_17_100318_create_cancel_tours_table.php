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
        Schema::create('cancel_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('refund_price')->unsigned();
            $table->string('reason_cancel');
            $table->timestamp('date_cancel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancel_tours');
    }
};
