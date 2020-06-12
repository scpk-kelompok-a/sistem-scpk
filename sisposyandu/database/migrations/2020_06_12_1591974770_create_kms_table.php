<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKmsTable extends Migration
{
    public function up()
    {
        Schema::create('kms', function (Blueprint $table) {

		$table->integer('id_kms',11);
		$table->string('nama_lansia',30);
		$table->integer('nama_pendamping',30);
		$table->integer('usia',5);
		$table->string('jenis_kelamin',10);
		$table->string('alamat',100);
		$table->integer('berat',5);
		$table->integer('suhu',5);
		$table->integer('tekanan_darah',5);
		$table->string('keluhan',20);
		$table->string('riwayat_penyakit',20);
		$table->string('pola_hidup',20);
		$table->string('pola_makan',20);

        });
    }

    public function down()
    {
        Schema::dropIfExists('kms');
    }
}