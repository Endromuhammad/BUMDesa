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
        Schema::table('goods_loan_details', function (Blueprint $table) {
            $table->foreignId('goods_loan_id')->constrained(
                table: 'goods_loans',
                indexName: 'goods_loan_detail_loan_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
