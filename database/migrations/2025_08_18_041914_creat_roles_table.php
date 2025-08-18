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
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->tinyInteger('visible')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('view')->default(1);
            $table->tinyInteger('create/update/delete')->default(1);
            $table->tinyInteger('export')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
