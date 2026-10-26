<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Presensi', function (Blueprint $table) {
            $table->bigInteger('id_presensi')->primary();
            $table->string('nip')->nullable();
            $table->foreign('nip')->references('nip')->on('Pegawai');
            $table->date('tanggal')->nullable();
            $table->time('jam_masuk')->nullable();
            $table->time('jam_keluar')->nullable();
            $table->string('status')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Presensi');
    }
};
