<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturbarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returbarang', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('no_nota');
            $table->string('nama_barang');
            $table->string('kode_barang');
            $table->integer('jumlah_barang');
            $table->string('alasan');
            $table->string('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returbarang');
    }
}
