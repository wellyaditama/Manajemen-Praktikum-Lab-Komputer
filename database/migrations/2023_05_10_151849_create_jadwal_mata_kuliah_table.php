<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mata_kuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaMataKuliah');
            $table->string('ruangKelas');
            $table->time('waktuMulai');
            $table->time('waktuSelesai');
            $table->string('hari');
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
        Schema::dropIfExists('jadwal_mata_kuliah');
    }
}
