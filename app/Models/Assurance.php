<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;
    protected $fillable = ['numero_client','prenom','nom','profession','adresse','marque','modele','puissance','energie','categorie','nombre_de_place','valeur_neuve','valeur_venale','numero_carte_grise','numero_police','date_effet','date_echeance','dure','numero_avenant','responsabilite_civile','thierce_complete','thierce_collision','vol','incendie','bris_de_glace','defence_sur_recours','securite_routiere','numero_attestation','id_apporter','assurance_choisit'
        ,'prime_ttc','taxes','prime_nette','rga','niveau','accessoires','nom_sur_la_carte_grise','token','telephone','immatriculation','date_de_naissance','mise_en_circulation','personnes_transportees','avance_sur_recours','defence_et_recours','thierce_complete_franchise','thierce_collision_franchise','vol_franchise','incendie_franchise','bonus_rc','defence_et_recours_capital_garanti','avance_sur_recours_capital_garanti','bonus_rc'];
}
