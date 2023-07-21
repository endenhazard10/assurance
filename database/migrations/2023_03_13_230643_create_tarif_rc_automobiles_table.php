<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifRcAutomobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif_rc_automobiles', function (Blueprint $table) {
            $table->id();
            $table->integer('categories');
            $table->integer('energie');
            $table->integer('puissance');
            $table->bigInteger('axa');
            $table->bigInteger('amsa');
            $table->bigInteger('wafa');
            $table->bigInteger('cnart');
            $table->bigInteger('allianz');
            $table->bigInteger('nsia');
            $table->bigInteger('askia');
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
        Schema::dropIfExists('tarif_rc_automobiles');
    }
}
