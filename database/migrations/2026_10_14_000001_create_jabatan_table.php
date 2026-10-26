<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Jabatan', function (Blueprint $table) {
            $table->string('id_jabatan')->primary();
            $table->string('nama_jabatan')->nullable();
            $table->bigInteger('gaji_pokok')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Jabatan');
    }
};
