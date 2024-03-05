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
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nip', 50);
            $table->string('alamat');
            $table->string('bidang');
            $table->string('avatar');
            $table->string('phone', 15);
            $table->string('tempat_lahir', 100);
            $table->string('tgl_lahir', 50);
            $table->string('agama', 50);
            $table->string('jenis_kelamin', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
