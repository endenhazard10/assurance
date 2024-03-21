<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoyagePrimeTtc extends Model
{
    use HasFactory;
    protected $fillable = ['age','zone_destination','duree','prime_nette','accessoires','taxes','prime_ttc'];
}
