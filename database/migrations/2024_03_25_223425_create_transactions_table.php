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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trash_id');
            // Bakal relasi ke table sampah
            $table->integer('kuantitas');
            $table->string('penjual');
            $table->string('pembeli');
            // Untuk penjual dan pembeli nnti bakal relasi ke table user sebagai level yang berbeda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
