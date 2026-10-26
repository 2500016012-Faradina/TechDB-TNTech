<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('Unit_Kerja', function (Blueprint $table) {
            $table->string('id_unit_kerja')->primary();
            $table->string('nama_unit')->nullable();
            $table->integer('maksimal_cuti')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Unit_Kerja');
    }
};
