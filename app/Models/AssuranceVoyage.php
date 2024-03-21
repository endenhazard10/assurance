<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceVoyage extends Model
{
    use HasFactory;
    protected $fillable=['prenom','nom','date_de_naissance','age','numero_police','profession','adresse','numero_passport','date_validite_passeport','motif_voyage','pays','formule','numero_police','numero_client','date_depart','duree','date_retour','valider','id_apporter','token'];
}
