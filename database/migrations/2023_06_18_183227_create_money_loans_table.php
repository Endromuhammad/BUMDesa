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
        Schema::create('money_loans', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->bigInteger('nominal');
            $table->integer('tenor');
            $table->bigInteger('monthly_fee');
            $table->string('ktp_path');
            $table->string('holding_ktp_path');
            $table->string('kk_path');
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_loans');
    }
};
