<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpvRcDiesel extends Model
{
    use HasFactory;
    protected $fillable=['puissance','energie','nombre_de_place_1','nombre_de_place_2_a_4','nombre_de_place_5_a_7','nombre_de_place_8_a_10','nombre_de_place_11_a_16','nombre_de_place_17'];
}
