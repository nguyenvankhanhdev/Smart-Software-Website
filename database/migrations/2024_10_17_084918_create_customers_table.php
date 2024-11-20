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
        // bảng khách hàng
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('sex');
            $table->date('dob');
            $table->string('address') ;
            $table->string('phonenumber');
            $table->string('image');
            $table->integer('custom_type_id')->unsigned();
            $table->foreign('custom_type_id')->references('id')->on('custom_types')->onDelete('cascade');
            $table->integer('user_id')->unsigned() ;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
