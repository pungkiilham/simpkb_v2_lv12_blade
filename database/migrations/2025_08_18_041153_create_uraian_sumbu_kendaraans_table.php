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
        Schema::create('uraian_sumbu_kendaraans', function (Blueprint $table) {
            $table->string('id', 36)->primary();

            $table->string('kendaraan_id', 36);
            $table->string('konfigurasi_sumbu', 50)->nullable();
            $table->string('konfigurasi_sumbu_1', 50)->nullable();
            $table->string('konfigurasi_sumbu_2', 50)->nullable();
            $table->string('konfigurasi_sumbu_3', 50)->nullable();
            $table->string('konfigurasi_sumbu_4', 50)->nullable();
            $table->string('konfigurasi_sumbu_5', 50)->nullable();
            $table->string('berat_sumbu_1', 50)->nullable();
            $table->string('berat_sumbu_2', 50)->nullable();
            $table->string('berat_sumbu_3', 50)->nullable();
            $table->string('berat_sumbu_4', 50)->nullable();
            $table->string('berat_sumbu_5', 50)->nullable();
            $table->string('berat_sumbu_6', 50)->nullable();
            $table->string('pemakaian_sumbu_1', 50)->nullable();
            $table->string('pemakaian_sumbu_2', 50)->nullable();
            $table->string('pemakaian_sumbu_3', 50)->nullable();
            $table->string('pemakaian_sumbu_4', 50)->nullable();
            $table->string('pemakaian_sumbu_5', 50)->nullable();
            $table->string('pemakaian_sumbu_6', 50)->nullable();
            $table->string('daya_sumbu_1', 50)->nullable();
            $table->string('daya_sumbu_2', 50)->nullable();
            $table->string('daya_sumbu_3', 50)->nullable();
            $table->string('daya_sumbu_4', 50)->nullable();
            $table->string('daya_sumbu_5', 50)->nullable();
            $table->string('daya_sumbu_6', 50)->nullable();

            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uraian_sumbu_kendaraans');
    }
};
