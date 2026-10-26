<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Pengajuan_Cuti', function (Blueprint $table) {
            $table->bigInteger('id_cuti')->primary();
            $table->string('nip')->nullable();
            $table->foreign('nip')->references('nip')->on('Pegawai');
            $table->string('jenis_cuti')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->integer('jumlah_hari')->nullable();
            $table->string('status_approval')->nullable();
            $table->string('nip_approval')->nullable();
            $table->foreign('nip_approval')->references('id_jabatan')->on('Jabatan');

        });
    }

    public function down()
    {
        Schema::dropIfExists('Pengajuan_Cuti');
    }
};
