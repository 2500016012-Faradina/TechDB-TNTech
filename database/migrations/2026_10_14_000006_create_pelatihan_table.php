<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Pelatihan', function (Blueprint $table) {
            $table->bigInteger('id_pelatihan')->primary();
            $table->string('nip')->nullable();
            $table->foreign('nip')->references('nip')->on('Pegawai');
            $table->string('nama_pelatihan')->nullable();
            $table->date('tgl_pelaksanaan')->nullable();
            $table->integer('jumlah_jam')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Pelatihan');
    }
};
