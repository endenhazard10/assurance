<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuranceVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurance_voyages', function (Blueprint $table) {
            $table->id();
            $table->string("prenom");
            $table->string("nom");
            $table->string("date_de_naissance");
            $table->integer("age");
            $table->string("profession");
            $table->string("adresse");
            $table->string("numero_passport");
            $table->string("date_validite_passeport");
            $table->string("motif_voyage");
            $table->string("pays");
            $table->string("formule");
            $table->string("date_depart");
            $table->string("date_retour");
            $table->integer("duree");
            $table->integer("id_apporter");
            $table->string("assurance_choisit")->nullable();
            $table->integer("valider")->default(0);
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
        Schema::dropIfExists('assurance_voyages');
    }
}
