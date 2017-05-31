<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->integer('id_transaksi')->unsigned();
            $table->integer('jumlah_tiket');
            $table->integer('total');
            $table->integer('id_seminar')->unsigned();
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksis')->onDelete('cascade');
            $table->foreign('id_seminar')->references('id_seminar')->on('seminars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksis');
    }
}
