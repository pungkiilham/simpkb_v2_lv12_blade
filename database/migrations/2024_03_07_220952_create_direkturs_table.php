<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('direktur', function (Blueprint $table) {
            $table->bigIncrements('idx');
            $table->string('nama', 50);
            $table->string('nip', 25)->unique();
            $table->string('pangkat', 255);
            $table->string('kodewilayah', 255)->unique();
            $table->string('flag_tandatangan_aktif', 1)->default(1);
            $table->tinyInteger('flag_aktif')->default(1);
            $table->string('verifikasi', 255);

            //$table->timestamps();
        });

        DB::statement("ALTER TABLE direktur ADD tandatangan MEDIUMBLOB");
        DB::statement("ALTER TABLE direktur ADD tandatangan2 MEDIUMBLOB");
        DB::statement("ALTER TABLE direktur ADD tandatangan3 MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direktur');
    }
};
