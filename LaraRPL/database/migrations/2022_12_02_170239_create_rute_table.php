<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rute', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bus');
            $table->string('titik_awal');
            $table->string('titik_sampai');
            $table->string('jam_berangkat');
            $table->string('jam_sampai');
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
        Schema::dropIfExists('rute');
    }
}
