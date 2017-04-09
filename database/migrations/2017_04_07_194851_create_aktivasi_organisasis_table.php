<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAktivasiOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivasi_organisasis', function (Blueprint $table) {
            $table->increments('id_aktivasi');
            $table->string('kode_aktivasi');
            $table->integer('id_organisasi')->unsigned();
            $table->boolean('status');
            $table->foreign('id_organisasi')->references('id_organisasi')->on('organisasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aktivasi_organisasis');
    }
}
