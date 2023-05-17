<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi_kuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judulmateri');
            $table->string('namamatakuliah');
            $table->string('dosenpengampu');
            $table->integer('pertemuanke');
            $table->string('keteranganmateri');
            $table->string('lampiran');
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
        Schema::dropIfExists('materi_kuliah');
    }
}
