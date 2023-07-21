<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarif2RouesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif2_roues', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
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
        Schema::dropIfExists('tarif2_roues');
    }
}
