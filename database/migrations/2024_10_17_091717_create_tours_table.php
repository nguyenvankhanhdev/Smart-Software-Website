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
        Schema::create('Tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('slug');
            $table->text('description');
            $table->boolean('status');
            $table->string('image');
            // nơi khỏi hành
            $table->string('place_tour');
            $table->string('tour_time');
            $table->bigInteger('price');
            $table->integer('tour_type_id')->unsigned();
            $table->foreign('tour_type_id')->references('id')->on('tour_types')->onDelete('cascade');
            $table->integer('discount_id')->unsigned()->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour');
    }
};
