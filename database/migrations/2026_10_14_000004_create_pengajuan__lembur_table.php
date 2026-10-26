<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Pengajuan_Lembur', function (Blueprint $table) {
            $table->bigInteger('id_lembur')->primary();
            $table->string('nip')->nullable();
            $table->foreign('nip')->references('nip')->on('Pegawai');
            $table->date('tanggal')->nullable();
            $table->string('total_jam')->nullable();
            $table->text('uraian_tugas')->nullable();
            $table->string('status_approval')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Pengajuan_Lembur');
    }
};
