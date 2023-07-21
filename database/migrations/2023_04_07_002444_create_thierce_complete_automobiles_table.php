<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThierceCompleteAutomobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thierce_complete_automobiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("franchise");
            $table->float("categorie1");
            $table->float("categorie2");
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
        Schema::dropIfExists('thierce_complete_automobiles');
    }
}
