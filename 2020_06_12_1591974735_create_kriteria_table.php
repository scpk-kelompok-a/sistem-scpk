<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaTable extends Migration
{
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {

		$table->integer('id_kriteria',11);
		$table->string('nama_kriteria',20);
		$table->integer('bobot',5);

        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria');
    }
}