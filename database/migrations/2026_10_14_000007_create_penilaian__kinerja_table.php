<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Penilaian_Kinerja', function (Blueprint $table) {
            $table->bigInteger('id_evaluasi')->primary();
            $table->string('nip')->nullable();
            $table->foreign('nip')->references('nip')->on('Pegawai');
            $table->string('periode')->nullable();
            $table->integer('skor_capaian')->nullable();
            $table->string('evaluator_nip')->nullable();
            $table->foreign('evaluator_nip')->references('id_jabatan')->on('Jabatan');

        });
    }

    public function down()
    {
        Schema::dropIfExists('Penilaian_Kinerja');
    }
};
