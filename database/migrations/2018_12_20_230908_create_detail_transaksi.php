<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaktions', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('id_transaksi');
            $table->string('nama_pelanggan');
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->string('jumlah_barang');
            $table->string('deskripsi_barang');
            $table->string('harga_barang');
            
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
        Schema::dropIfExists('detail_transaktions');
    }
}
