<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("numero_client");
            $table->string("prenom");
            $table->string("nom");
            $table->string("profession");
            $table->string("adresse");
            $table->string("marque");
            $table->string("modele");
            $table->string("puissance");
            $table->string("energie");
            $table->string("categorie");
            $table->string("nombre_de_place")->default(0);
            $table->bigInteger("valeur_neuve")->default(0);
            $table->bigInteger("valeur_venale")->default(0);
            $table->string("nom_sur_la_carte_grise");
            $table->string("numero_attestation");
            $table->string("date_effet");
            $table->string("date_echeance");
            $table->string("dure");
            $table->string("numero_avenant");
            $table->bigInteger("responsabilite_civile")->default(0);
            $table->bigInteger("thierce_complete")->default(0);
            $table->bigInteger("thierce_complete_franchise")->default(0);
            $table->bigInteger("thierce_collision")->default(0);
            $table->bigInteger("thierce_collision_franchise")->default(0);
            $table->bigInteger("vol")->default(0);
            $table->bigInteger("vol_franchise")->default(0);
            $table->bigInteger("incendie")->default(0);
            $table->bigInteger("incendie_franchise")->default(0);
            $table->bigInteger("bris_de_glace")->default(0);
            $table->bigInteger("defence_et_recours")->default(0);
            $table->bigInteger("defence_et_recours_capital_garanti")->default(0);
            $table->bigInteger("avance_sur_recours")->default(0);
            $table->bigInteger("avance_sur_recours_capital_garanti")->default(0);
            $table->bigInteger("personnes_transportees")->default(0);
            $table->integer("id_apporter");
            $table->string("assurance_choisit")->default("null");
            $table->bigInteger("prime_ttc")->default(0);
            $table->bigInteger("taxes")->default(0);
            $table->bigInteger("prime_nette")->default(0);
            $table->bigInteger("rga")->default(0);
            $table->bigInteger("accessoires")->default(0);
            $table->string("telephone");
            $table->string("immatriculation");
            $table->string("date_de_naissance");
            $table->string("mise_en_circulation");
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
        Schema::dropIfExists('assurances');
    }
}
