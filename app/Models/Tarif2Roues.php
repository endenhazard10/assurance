<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif2Roues extends Model
{
    use HasFactory;
     $timestamps = false;
     protected $fillable = ['type','axa','amsa','wafa','cnart','allianz','nsia','askia'];
}
