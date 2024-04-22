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
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('NIK')->unique();
            $table->date('Tanggal_Lahir');
            $table->string('Alamat');
            $table->string('No_Hp');
            $table->unsignedBigInteger('kartu_keluarga_id'); // Menambahkan kolom kartu_keluarga_id
            $table->foreign('kartu_keluarga_id')->references('id')->on('kartu_keluargas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduks');
    }
};
