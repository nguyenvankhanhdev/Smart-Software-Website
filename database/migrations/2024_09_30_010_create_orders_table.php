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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('total_amount',10,2)->nullable();
            $table->boolean('status')->default(0);
            $table->date('payment_date')->nullable();
            $table->string('payment_method')->nullable();
            $table->date('create_bill_date')->nullable();
            $table->unsignedInteger('book_tour_id');
            $table->unsignedInteger('customer_id');
            $table->foreign('book_tour_id')->references('id')->on('book_tours')->cascadeOnDelete();
            $table->foreign('customer_id')->references('id')->on('customers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_bills');
    }
};
