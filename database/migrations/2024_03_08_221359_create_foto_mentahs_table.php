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
        Schema::create('fotomentah', function (Blueprint $table) {
            $table->increments('idx');
            $table->string('nouji', 20);
            $table->integer('statuskompres', false, true)->length(11)->default(0);
            //$table->timestamps();
        });

        DB::statement("ALTER TABLE fotomentah ADD fotodepanmentah MEDIUMBLOB");
        DB::statement("ALTER TABLE fotomentah ADD fotobelakangmentah MEDIUMBLOB");
        DB::statement("ALTER TABLE fotomentah ADD fotokananmentah MEDIUMBLOB");
        DB::statement("ALTER TABLE fotomentah ADD fotokirimentah MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotomentah');
    }
};
