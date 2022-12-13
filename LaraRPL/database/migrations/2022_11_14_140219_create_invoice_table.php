<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('bus');
        Schema::create('invoice', function (Blueprint $table) {
            $table->id()->Primary();
            $table->string('id_bus_invoice');
            $table->string('sifat');
            $table->string('kode_invoice');
            $table->string('email');
            $table->string('tgl_cetak');
            $table->string('tipe_bayar');
            $table->string('no_bayar');
            $table->string('tgl_pickup');
            $table->string('berangkat');
            $table->string('sampai');
            $table->string('lokasi');
            $table->string('tujuan');
            $table->string('jmlh_kursi');
            $table->string('harga');
            $table->string('file');
            $table->integer('status');
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
        Schema::dropIfExists('bus');
    }
}
