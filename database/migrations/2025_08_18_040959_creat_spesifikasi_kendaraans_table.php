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
        Schema::create('spesifikasi_kendaraans', function (Blueprint $table) {
            $table->string('id', 36)->primary();

            $table->string('kendaraan_id', 36);
            $table->string('kubikasi_mesin', 50)->nullable();
            $table->string('daya_mesin', 50)->nullable();
            $table->integer('jenis_bahan_bakar_id', false, true)->length(11)->nullable();
            $table->string('dimensi_panjang', 50)->nullable();
            $table->string('dimensi_lebar', 50)->nullable();
            $table->string('dimensi_tinggi', 50)->nullable();
            $table->string('bak_panjang', 50)->nullable();
            $table->string('bak_lebar', 50)->nullable();
            $table->string('bak_tinggi', 50)->nullable();
            $table->string('nama_karoseri', 50)->nullable();
            $table->string('warna_kabin', 50)->nullable();
            $table->string('warna_bak', 50)->nullable();
            $table->string('roh', 50)->nullable();
            $table->string('foh', 50)->nullable();
            $table->string('jarak_terendah', 50)->nullable();
            $table->string('jenis_karoseri', 50)->nullable();
            $table->string('bahan_utama', 50)->nullable();
            $table->string('tempat_duduk', 50)->nullable();
            $table->string('kapasitas_berdiri', 50)->nullable();

            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_kendaraans');
    }
};
