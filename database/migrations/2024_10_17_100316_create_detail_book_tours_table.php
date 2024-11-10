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
        Schema::create('detail_book_tours', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->integer('book_tour_id')->unsigned();
            $table->primary(['book_tour_id', 'customer_id']);
            $table->float('price');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('book_tour_id')->references('id')->on('book_tours')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_book_tours');
    }
};
