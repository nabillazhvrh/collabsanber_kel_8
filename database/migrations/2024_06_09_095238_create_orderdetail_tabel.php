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
        Schema::create('orderdetail_tabel', function (Blueprint $table) {
            $table->unsignedBigInteger("Orderid");
            $table->unsignedBigInteger("productID");
            $table->int("Quantity");
            $table->string("Subtotal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik_orderdetail_tabel');
    }
};