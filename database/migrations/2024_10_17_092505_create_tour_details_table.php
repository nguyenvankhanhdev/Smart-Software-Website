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
        Schema::create('tour_details', function (Blueprint $table) {
            $table->date('start_date');
            $table->date('end_date');
            $table->bigInteger('price') ;
            $table->integer('tour_id')->unsigned();
            // mã điểm du lịch
            $table->integer('tour_attraction_id')->unsigned();
            $table->primary(['tour_id', 'tour_attraction_id']);
            $table->foreign('tour_attraction_id')->references('id')->on('tour_attractions')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiettour');
    }
};
