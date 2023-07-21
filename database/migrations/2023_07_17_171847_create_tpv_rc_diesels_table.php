<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpvRcDieselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpv_rc_diesels', function (Blueprint $table) {
            $table->id();
            $table->integer("puissance");
            $table->string("energie");
            $table->bigInteger("nombre_de_place_1");
            $table->bigInteger("nombre_de_place_2_a_4");
            $table->bigInteger("nombre_de_place_5_a_7");
            $table->bigInteger("nombre_de_place_8_a_10");
            $table->bigInteger("nombre_de_place_11_a_16");
            $table->bigInteger("nombre_de_place_17");
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
        Schema::dropIfExists('tpv_rc_diesels');
    }
}
