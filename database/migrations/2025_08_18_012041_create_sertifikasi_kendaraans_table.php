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
        Schema::create('sertifikasi_kendaraans', function (Blueprint $table) {
            $table->string('id', 36)->primary();

            $table->string('kendaraan_id', 36);
            $table->string('sertifikat_registrasi_nomor', 50)->nullable();
            $table->string('sertifikat_registrasi_penerbit', 50)->nullable();
            $table->date('sertifikat_registrasi_tanggal')->nullable();
            $table->string('sertifikat_uji_nomor', 50)->nullable();
            $table->string('sertifikat_uji_penerbit', 50)->nullable();
            $table->date('sertifikat_uji_tanggal')->nullable();
            $table->string('sertifikat_rancang_nomor', 50)->nullable();
            $table->string('sertifikat_rancang_penerbit', 50)->nullable();
            $table->date('sertifikat_rancang_tanggal')->nullable();

            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikasi_kendaraans');
    }
};
