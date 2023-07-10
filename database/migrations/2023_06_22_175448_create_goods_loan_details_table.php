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
        Schema::create('goods_loan_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('goods_loan_id')->unsigned();
            $table->foreignId('barang_id')->constrained(
                table: 'barang',
                indexName: 'goods_loan_barang_id'
            );
            $table->bigInteger('price');
            $table->timestamps();

            // $table->foreign('goods_loan_id')->references('id')->on('goods_loan')->onDelete('cascade');
            // $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods_loan_details');
    }
};
