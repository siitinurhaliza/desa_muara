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
        Schema::create('datakelahiran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('Tanggal_Lahir');
            $table->string('waktu_kelahiran');
            $table->string('No_Hp');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakelahiran');
    }
};
