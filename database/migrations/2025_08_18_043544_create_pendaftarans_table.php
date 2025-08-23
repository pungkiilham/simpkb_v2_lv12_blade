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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->string('id', 36)->primary();

            $table->string('kendaraan_id', 36);
            $table->date('tanggal_uji')->nullable();
            $table->date('tanggal_mati_uji')->nullable();
            $table->integer('jenis_pengujian_id', false, true)->length(11)->nullable();
            $table->integer('jenis_kendaraan_id', false, true)->length(11)->nullable();
            $table->tinyInteger('ganti_kartu')->nullable();
            $table->tinyInteger('dikuasakan')->nullable();
            $table->tinyInteger('status_pendaftaran')->nullable();
            $table->string('keterangan_ditolak', 500)->nullable();

            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
