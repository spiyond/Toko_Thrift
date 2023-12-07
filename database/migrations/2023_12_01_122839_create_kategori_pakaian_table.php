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
        Schema::create('kategori_pakaian', function (Blueprint $table) {
            $table->id('kategori_pakaian_id');
            $table->string('kategori_pakaian_nama', 50)->unique();
            $table->string('kategori_pakaian_kode', 8)->unique();
            $table->boolean('kategori_pakaian_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_pakaian');
    }
};