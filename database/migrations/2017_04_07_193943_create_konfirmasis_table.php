<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonfirmasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasis', function (Blueprint $table) {
            $table->increments('id_konfirmasi');
            $table->integer('id_peserta')->unsigned();
            $table->string('bank_pengirim', 15);
            $table->string('atas_nama', 50);
            $table->integer('jumlah_transfer');
            $table->integer('id_transaksi')->unsigned();
            $table->integer('id_admin')->unsigned()->nullable();
            $table->boolean('status');
            $table->foreign('id_peserta')->references('id_peserta')->on('pesertas')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksis')->onDelete('cascade');
            $table->foreign('id_admin')->references('id_admin')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasis');
    }
}
