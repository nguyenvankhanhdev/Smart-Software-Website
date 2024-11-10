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
        Schema::create('book_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id')->unsigned() ;
            $table->date('book_date');
            $table->float('price')->unsigned();
            $table->string('status');
            $table->integer('quantity');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tours');
    }
};
