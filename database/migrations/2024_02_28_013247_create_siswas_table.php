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
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis', 50)->unique();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('wsiswa_id');
            $table->unsignedInteger('kelas_id');
            $table->string('phone', 15);
            $table->string('alamat');
            $table->string('tempat_lahir', 100);
            $table->string('tgl_lahir');
            $table->string('agama', 50);
            $table->string('jenis_kelamin', 10);
            $table->string('status', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};