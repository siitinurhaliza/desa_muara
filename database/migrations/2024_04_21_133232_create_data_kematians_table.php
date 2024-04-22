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
        Schema::create('data_kematians', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('penduduk_id'); // Mengganti penduduk_nik menjadi penduduk_id
            $table->foreign('penduduk_id')->references('id')->on('data_penduduks');
            $table->date('tgl_lahir');
            $table->date('tgl_mati');
            $table->string('penyebab');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kematians');
    }
};
