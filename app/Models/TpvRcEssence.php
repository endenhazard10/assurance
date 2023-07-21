<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpvRcEssence extends Model
{
    use HasFactory;
    protected $fillable=['puissance','energie','nombre_de_place_2','nombre_de_place_3_a_6','nombre_de_place_7_a_10','nombre_de_place_11_a_14','nombre_de_place_15_a_23','nombre_de_place_24'];
}
