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
        // bảng chức vụ
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            // hệ số lương
            $table->float('salary_coefficient')->nullable();
            $table->timestamps() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
