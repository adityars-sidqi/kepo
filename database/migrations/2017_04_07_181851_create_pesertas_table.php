<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id_peserta');
            $table->string('nama', 50);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('email', 100);
            $table->string('password');
            $table->unique('email');
            $table->string('kode_aktivasi');
            $table->enum('status', ['Aktif', 'Nonaktif']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
