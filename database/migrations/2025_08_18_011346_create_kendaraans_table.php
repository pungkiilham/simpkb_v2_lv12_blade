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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->string('id', 36)->primary();

            $table->string('nomor_uji', 50);
            $table->string('nomor_kendaraan', 50);
            $table->integer('jenis_pemilik_id', false, true)->length(11)->nullable();
            $table->string('nama_pemilik', 50);
            $table->string('jenis_identitas', 50)->nullable();
            $table->string('nomor_identitas', 50)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 50)->nullable();
            $table->string('alamat_pemilik', 500)->nullable();
            $table->string('rt', 5)->nullable()->nullable();
            $table->string('rw', 5)->nullable()->nullable();
            $table->string('kelurahan', 50)->nullable();
            $table->string('kecamatan', 50)->nullable();
            $table->string('kabupaten', 50)->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('awal_pakai', 50)->nullable();
            $table->string('tahun', 5)->nullable();
            $table->string('nomor_mesin', 50)->nullable();
            $table->string('nomor_rangka', 50)->unique();
            $table->string('nomor_wa', 50)->nullable();
            $table->integer('jenis_kendaraan_id', false, true)->length(11)->nullable();
            $table->string('keterangan_jenis_kendaraan', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('merk', 50)->nullable();
            $table->string('tipe', 50)->nullable();
            $table->string('nama_importir', 50)->nullable();
            $table->date('tanggal_uji')->nullable();
            $table->date('tanggal_mati_uji')->nullable();

            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
