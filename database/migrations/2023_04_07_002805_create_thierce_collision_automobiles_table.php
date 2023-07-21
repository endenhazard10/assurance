<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThierceCollisionAutomobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thierce_collision_automobiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("franchise");
            $table->float("categorie1");
            $table->float("categorie2_moins_9_cv");
            $table->float("categorie2_plus_9_cv");
            $table->float("categorie3_4");
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
        Schema::dropIfExists('thierce_collision_automobiles');
    }
}
