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
            $table->string('judul', 150);
            $table->date('tgl_seminar');
            $table->string('tempat', 100);
            $table->text('deskripsi');
            $table->integer('tiket_tersedia');
            $table->integer('harga');
            $table->string('gambar');
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
