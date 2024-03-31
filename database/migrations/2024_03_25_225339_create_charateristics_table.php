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
        Schema::create('characteristics', function (Blueprint $table) {
            $table->enum('jenis', ['organik', 'anorganik', 'b3', 'kertas', 'residu'])->primary();
            // bakal jadi PR KEY
            $table->string('jenis_wadah', 50);
            $table->string('warna', 50);
            $table->string('kondisi', 100);
            $table->text('tips_daur_ulang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charateristics');
    }
};
