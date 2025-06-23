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
        Schema::create('tabel_datasiswa', function (Blueprint $table) {
            $table->id(); 
            $table->string('id_student')->unique(); 
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('class'); 
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('menu_price'); 
            $table->string('allergies')->nullable(); 
            $table->string('additional_note')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_datasiswa');
    }
};
