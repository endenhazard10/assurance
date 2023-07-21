<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoyagePrimeTTC extends Model
{
    use HasFactory;
    protected $fillable = ['age','zone_destination','duree','prime_ttc'];
}
