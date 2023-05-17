<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nimmahasiswa');
            $table->string('namamahasiswa');
            $table->time('jadwal');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->string('matakuliah');
            $table->string('dosenpengampu');
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
        Schema::dropIfExists('absensi');
    }
}
