<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifTable extends Migration
{
    public function up()
    {
        Schema::create('alternatif', function (Blueprint $table) {

		$table->integer('id_alternatif',11);
		$table->string('nama_alternatif');

        });
    }

    public function down()
    {
        Schema::dropIfExists('alternatif');
    }
}