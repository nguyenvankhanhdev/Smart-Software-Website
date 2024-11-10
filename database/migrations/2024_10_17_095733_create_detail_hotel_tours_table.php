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
        Schema::create('detail_hotel_tours', function (Blueprint $table) {
            $table->integer('hotel_id')->unsigned();
            $table->integer('tour_id')->unsigned();
            // vị trí phòng trong khách sạn
            $table->string('position_room');
            // số lượng người trong phòng
            $table->integer('quantity')->unsigned();
            $table->primary(['tour_id', 'hotel_id']);
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_hotel_tours');
    }
};
