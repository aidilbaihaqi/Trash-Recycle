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
        Schema::table('trashes', function (Blueprint $table) {
            $table->foreign('jenis')
            ->references('jenis')
            ->on('characteristics')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('trash_id')
            ->references('id')
            ->on('trashes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreign_key_relationships');
    }
};
