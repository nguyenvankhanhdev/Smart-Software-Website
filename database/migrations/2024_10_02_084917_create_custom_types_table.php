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
        // bảng loại khách hàng
        Schema::create('custom_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // mức áp dụng giá
            $table->integer('level_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_types');
    }
};
