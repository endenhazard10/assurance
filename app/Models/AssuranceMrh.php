<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceMrh extends Model
{
    use HasFactory;
    protected $fillable = ['id_apporter','numero_client','prenom','nom','profession','age','qualite','telephone','email','adresse','genre_de_construction','type_de_residence','superficie_developpe','nombre_de_piece_principale','valeur_contenu','valeur_du_batiment','si_appartement_dans_un_immeuble','garantie_de_base','assistance_a_domicile','dommages_electriques','vol_remplacement_serrures','rc_sejour_voyage','rc_chients','rc_sports','assurance_scolaire',
    'numero_police','date_effet','date_echeance','duree','effectif_assurance_scolaire'
        ,'effectif_rc_chients','effectif_rc_sports','assurance_choisit','prime_nette','prime_ttc','taxes','token','telephone','valider'
    ,'prenom_et_nom_scolaire','avenant','date_de_naissance_scolaire','age_scolaire','sexe_scolaire','etablissement_scolaire',
    'niveau_etude_scolaire','race','vaccin','date_derniere_vaccination','prenom_et_nom_sport','date_de_naissance_sport',
    'age_sport','sexe_sport','profession_sport','garantie_de_base','accessoire'];
}
