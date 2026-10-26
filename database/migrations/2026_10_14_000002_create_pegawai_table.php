<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Pegawai', function (Blueprint $table) {
            $table->string('nip')->primary();
            $table->string('nama_lengkap')->nullable();
            $table->string('nik')->nullable();
            $table->string('id_unit_kerja')->nullable();
            $table->foreign('id_unit_kerja')->references('id_unit_kerja')->on('Unit_Kerja');
            $table->string('id_jabatan')->nullable();
            $table->foreign('id_jabatan')->references('id_jabatan')->on('Jabatan');
            $table->string('status_kepegawaian')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('nomor_str_sip')->nullable();
            $table->date('tgl_exp_str_sip')->nullable();
            $table->string('nomor_rekening')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Pegawai');
    }
};
