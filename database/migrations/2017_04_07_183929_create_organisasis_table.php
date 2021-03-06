<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasis', function (Blueprint $table) {
            $table->increments('id_organisasi');
            $table->string('nama', 100);
            $table->string('telp', 12);
            $table->text('alamat');
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
        Schema::dropIfExists('organisasis');
    }
}
