<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpvRcEssencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpv_rc_essences', function (Blueprint $table) {
            $table->id();
            $table->integer("puissance");
            $table->string("energie");
            $table->bigInteger("nombre_de_place_2");
            $table->bigInteger("nombre_de_place_3_a_6");
            $table->bigInteger("nombre_de_place_7_a_10");
            $table->bigInteger("nombre_de_place_11_a_14");
            $table->bigInteger("nombre_de_place_15_a_23");
            $table->bigInteger("nombre_de_place_24");
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
        Schema::dropIfExists('tpv_rc_essences');
    }
}
