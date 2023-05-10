<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiPraktikumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_praktikum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idJadwal');
            $table->string('namaMahasiswa');
            $table->string('nimMahasiswa');
            $table->string('namaMatakuliah');
            $table->string('statusKehadiran');
            $table->date('tanggalWaktuAbsensi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_praktikum');
    }
}
