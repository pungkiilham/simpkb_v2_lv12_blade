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
        Schema::create('pengujians', function (Blueprint $table) {

            $table->string('id', 36)->primary();
            $table->string('kendaraan_id', 36)->nullable();
            $table->string('pendaftaran_id', 36)->nullable();
            $table->bigInteger('data_pengujian_idx', false, true)->length(20)->nullable();
            $table->string('foto_depan', 255)->nullable();
            $table->string('foto_belakang', 255)->nullable();
            $table->string('foto_kiri', 255)->nullable();
            $table->string('foto_kanan', 255)->nullable();
            $table->tinyInteger('hasil_pra_uji')->nullable();
            $table->string('keterangan_tidak_lulus_pra_uji', 500)->nullable();
            $table->integer('pic_pra_uji', false, true)->length(11)->nullable();
            $table->string('emisi_bensin_co', 50)->nullable();
            $table->string('emisi_bensin_hc', 50)->nullable();
            $table->string('emisi_diesel', 50)->nullable();
            $table->tinyInteger('hasil_uji_emisi')->nullable();
            $table->string('keterangan_tidak_lulus_uji_emisi', 500)->nullable();
            // $table->integer('pic_uji_emisi', 11)->nullable();
            $table->integer('pic_uji_emisi', false, true)->length(11)->nullable();

            $table->tinyInteger('hasil_uji_pit_lift')->nullable();
            $table->string('keterangan_tidak_lulus_uji_pit_lift', 500)->nullable();
            // $table->integer('pic_uji_pit_lift', 11)->nullable();
            $table->integer('pic_uji_pit_lift', false, true)->length(11)->nullable();

            $table->string('kuat_pancar_kiri', 50)->nullable();
            $table->string('kuat_pancar_kanan', 50)->nullable();
            $table->string('simpang_kiri', 50)->nullable();
            $table->string('simpang_kanan', 50)->nullable();
            $table->tinyInteger('hasil_uji_lampu')->nullable();
            $table->string('keterangan_tidak_lulus_uji_lampu', 500)->nullable();
            // $table->integer('pic_uji_lampu', 11)->nullable();
            $table->integer('pic_uji_lampu', false, true)->length(11)->nullable();

            $table->string('daya_rem_sumbu_1', 50)->nullable();
            $table->string('daya_rem_sumbu_2', 50)->nullable();
            $table->string('daya_rem_sumbu_3', 50)->nullable();
            $table->string('daya_rem_sumbu_4', 50)->nullable();
            $table->string('daya_rem_sumbu_5', 50)->nullable();
            $table->string('daya_rem_sumbu_6', 50)->nullable();

            $table->string('selisih_daya_rem_sumbu_1', 50)->nullable();
            $table->string('selisih_daya_rem_sumbu_2', 50)->nullable();
            $table->string('selisih_daya_rem_sumbu_3', 50)->nullable();
            $table->string('selisih_daya_rem_sumbu_4', 50)->nullable();
            $table->string('selisih_daya_rem_sumbu_5', 50)->nullable();
            $table->string('selisih_daya_rem_sumbu_6', 50)->nullable();

            $table->tinyInteger('hasil_uji_rem')->nullable();
            $table->string('keterangan_tidak_lulus_uji_rem', 500)->nullable();
            // $table->integer('pic_uji_rem', 11)->nullable();
            $table->integer('pic_uji_rem', false, true)->length(11)->nullable();

            $table->string('lebar_kuncup', 50)->nullable();
            $table->tinyInteger('hasil_uji_kuncup')->nullable();
            $table->string('keterangan_tidak_lulus_uji_kuncup', 500)->nullable();
            // $table->integer('pic_uji_kuncup', 11)->nullable();
            $table->integer('pic_uji_kuncup', false, true)->length(11)->nullable();

            $table->string('kecepatan', 50)->nullable();
            $table->tinyInteger('hasil_uji_speedo')->nullable();
            $table->string('keterangan_tidak_lulus_uji_speedo', 500)->nullable();
            // $table->integer('pic_uji_speedo', 11)->nullable();
            $table->integer('pic_uji_speedo', false, true)->length(11)->nullable();


            // $table->integer('pic_verifikator', 11)->nullable();
            $table->integer('pic_verifikator', false, true)->length(11)->nullable();

            $table->tinyInteger('hasil_pengujian')->default(3);
            $table->string('keterangan_tidak_lulus', 500)->nullable();

            $table->tinyInteger('active')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengujians');
    }
};
