<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('bus');
        Schema::create('daftar_bus', function (Blueprint $table) {
            $table->id()->Primary();
            $table->string('Nama_Bus');
            $table->string('Sifat');
            $table->string('Area');
            $table->string('Kode_Bus')->Unique();
            $table->string('pabrikan');
            $table->string('no_mesin');
            $table->string('Plat nomor')->Unique();
            $table->string('Kapasitas');
            $table->string('Bagasi');
            $table->string('foto');
            $table->string('harga');
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
