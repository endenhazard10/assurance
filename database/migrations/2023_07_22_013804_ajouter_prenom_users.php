<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterPrenomUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->bigInteger('contrat_automobile_vendus')->nullable();
            $table->bigInteger('commissions_dues_automobile')->nullable();
            $table->bigInteger('commissions_soldees_automobile')->nullable();
            $table->bigInteger('contrat_voyage_vendus')->nullable();
            $table->bigInteger('commissions_dues_voyage')->nullable();
            $table->bigInteger('commissions_soldees_voyage')->nullable();
            $table->bigInteger('contrat_habitation_vendus')->nullable();
            $table->bigInteger('commissions_dues_habitation')->nullable();
            $table->bigInteger('commissions_soldees_habitation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
