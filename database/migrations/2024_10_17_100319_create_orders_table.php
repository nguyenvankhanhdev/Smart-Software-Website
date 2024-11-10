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
            // tổng tiền
            $table->float('total_amount')->unsigned();
            $table->string('status') ;
            $table->string('payment_method');
            // mã số thuế
            $table->string('tax_code');
            // tên đơn vị
            $table->string('unit_name');
            // địa chỉ đơn vị
            $table->string('address_unit'); ;
            // tên người đại diện
            $table->string('representative');

            $table->integer('cancel_tours_id')->unsigned()->nullable();
            $table->integer('book_tour_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('book_tour_id')->references('id')->on('book_tours')->onDelete('cascade');
            $table->foreign('cancel_tours_id')->references('id')->on('cancel_tours')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
