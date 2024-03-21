<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuranceMrhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurance_mrhs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_apporter');
            $table->bigInteger("numero_client");
            $table->string("prenom");
            $table->string("nom");
            $table->string("profession");
            $table->string("age");
            $table->string("qualite");
            $table->string("telephone");
            $table->string("email");
            $table->string("adresse");
            $table->string("genre_de_construction");
            $table->string("type_de_residence");
            $table->string("superficie_developpe");
            $table->string("nombre_de_piece_principale");
            $table->bigInteger("valeur_contenu");
            $table->bigInteger("valeur_du_batiment");
            $table->string("si_appartement_dans_un_immeuble");
            $table->integer("garantie_de_base");
            $table->integer("assistance_a_domicile")->nullable();
            $table->integer("dommages_electriques")->nullable();
            $table->integer("vol_remplacement_serrures")->nullable();
            $table->integer("rc_sejour_voyage")->nullable();
            $table->integer("rc_chients")->nullable();
            $table->integer("rc_sports")->nullable();
            $table->integer("assurance_scolaire")->nullable();
            $table->string("numero_police");
            $table->string("date_effet");
            $table->string("date_echeance");
            $table->string("duree");
            $table->string("avenant")->nullable();
            $table->string("effectif_assurance_scolaire")->nullable();
            $table->string("effectif_rc_chients")->nullable();
            $table->string("effectif_rc_sports")->nullable();
            $table->string("assurance_choisit")->nullable();
            $table->bigInteger("accessoire");
            $table->string("prenom_et_nom_scolaire")->nullable();
            $table->string("date_de_naissance_scolaire")->nullable();
            $table->string("age_scolaire")->nullable();
            $table->string("sexe_scolaire")->nullable();
            $table->string("etablissement_scolaire")->nullable();
            $table->string("niveau_etude_scolaire")->nullable();
            $table->string("race")->nullable();
            $table->string("vaccin")->nullable();
            $table->string("date_derniere_vaccination")->nullable();
            $table->string("prenom_et_nom_sport")->nullable();
            $table->string("date_de_naissance_sport")->nullable();
            $table->string("age_sport")->nullable();
            $table->string("sexe_sport")->nullable();
            $table->string("profession_sport")->nullable();
            $table->bigInteger("prime_nette")->default(0);
            $table->bigInteger("prime_ttc")->default(0);
            $table->bigInteger("taxes")->default(0);
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
        Schema::dropIfExists('assurance_mrhs');
    }
}
