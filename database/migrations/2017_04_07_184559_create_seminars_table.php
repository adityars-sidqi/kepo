<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->increments('id_seminar');
            $table->string('nama_seminar');
            $table->date('tgl_seminar');
            $table->string('tempat');
            $table->text('deskripsi');
            $table->integer('jumlah_tiket');
            $table->integer('harga');
            $table->string('gambar', 255);
            $table->integer('id_kategori')->unsigned();
            $table->integer('id_organisasi')->unsigned();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->onDelete('cascade');
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
        Schema::dropIfExists('seminars');
    }
}
