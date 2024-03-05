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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kelas_id');
            $table->string('tahun_ajaran');
            $table->string('keterangan', 7);
            $table->integer('biaya_semester');
            $table->integer('psb');
            $table->integer('pts_ganjil');
            $table->integer('pts_genap');
            $table->integer('spas');
            $table->integer('pat');
            $table->integer('raport');
            $table->integer('daftar_ulang');
            $table->integer('un')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
