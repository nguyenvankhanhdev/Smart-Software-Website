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
        // phân công chức vụ
        Schema::create('Task', function (Blueprint $table) {
            // mã nhân viên
            $table->integer('employee_id')->unsigned();
            // mã chức vụ
            $table->integer('position_id')->unsigned();
            $table->primary(['position_id', 'employee_id']);
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->timestamps() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Task');
    }
};
