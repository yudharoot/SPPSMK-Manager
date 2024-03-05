<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wsiswa_id');
            $table->unsignedInteger('categorie_id');
            $table->string('bulan',50);
            $table->integer('biaya_semester');
            $table->string('tahun_ajaran', 20);
            $table->integer('psb')->nullable();
            $table->integer('pts_genap')->nullable();
            $table->integer('pts_ganjil')->nullable();
            $table->integer('spas')->nullable();
            $table->integer('pat')->nullable();
            $table->integer('raport')->nullable();
            $table->integer('daftar_ulang')->nullable();
            $table->integer('un')->nullable();
            $table->integer('total_bayar');
            $table->string('tgl_bayar', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}