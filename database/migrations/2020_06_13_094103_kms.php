<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lansia');
            $table->string('nama_pendamping');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->integer('berat');
            $table->integer('suhu');
            $table->integer('tekanan_darah');
            $table->string('keluhan');
            $table->string('riwayat_penyakit');
            $table->string('pola_hidup');
            $table->string('pola_makan');
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
        Schema::drop('kms');
    }
}
