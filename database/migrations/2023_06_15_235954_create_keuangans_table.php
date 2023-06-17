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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->char('id_keuangan', 10)->primary();
            $table->char('nim', 10)->index();
            $table->char('id_pegawai', 10)->index();
            $table->binary('dokumen_keuangan');
            $table->string('status_keuangan');
            $table->text('rincian_keuangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
