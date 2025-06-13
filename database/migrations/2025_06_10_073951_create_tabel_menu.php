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
        Schema::create('tabel_menu', function (Blueprint $table) {
            $table->id();
            $table->string('kode_menu')->unique();
            $table->string('nama_menu');
            $table->text('keterangan')->nullable();
            $table->integer('harga');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_menu');
    }
};
