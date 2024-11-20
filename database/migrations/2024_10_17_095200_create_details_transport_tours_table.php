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
        Schema::create('details_transport_tours', function (Blueprint $table) {
            $table->integer('tour_id')->unsigned();
            $table->integer('transport_id')->unsigned();
            $table->integer('quantity_custom')->unsigned();
            $table->string('note')->nullable();
            $table->primary(['tour_id', 'transport_id']);
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->foreign('transport_id')->references('id')->on('transportations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_transport_tours');
    }
};
