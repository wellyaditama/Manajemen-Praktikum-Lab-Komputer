<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKumpulTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kumpul_tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judultugas');
            $table->string('namamahasiswa');
            $table->string('nimmahasiswa');
            $table->string('filetugas');
            $table->string('keterangantugas');
            $table->integer('nilaitugas');
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
        Schema::dropIfExists('kumpul_tugas');
    }
}
