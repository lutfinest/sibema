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
        Schema::create('prodis', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prodi')->autoIncrement();
            $table->unsignedBigInteger('id_jurusan');
            $table->char('nama_prodi');
            $table->timestamps();

            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
