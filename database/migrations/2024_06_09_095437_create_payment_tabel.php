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
        Schema::create('kritik__payment_tabel', function (Blueprint $table) {
            $table->int('payment');
            $table->string('method');
            $table->string('Date');
            $table->string('Total');
            $table->unsignedBigInteger('order_id');
 
            $table->foreign('OrderID')->references('OrderID')->on('orders')->onDelete('cascade');
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik__payment_tabel');
    }
};