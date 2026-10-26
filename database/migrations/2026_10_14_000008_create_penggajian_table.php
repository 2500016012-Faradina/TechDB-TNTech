<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Penggajian', function (Blueprint $table) {
            $table->bigInteger('id_penggajian')->primary();
            $table->string('nip')->nullable();
            $table->foreign('nip')->references('nip')->on('Pegawai');
            $table->string('periode')->nullable();
            $table->bigInteger('gaji_pokok')->nullable();
            $table->bigInteger('tunjangan')->nullable();
            $table->bigInteger('nominal_lembur')->nullable();
            $table->bigInteger('potongan')->nullable();
            $table->bigInteger('gaji_bersih')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Penggajian');
    }
};
