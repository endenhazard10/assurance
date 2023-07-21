<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThierceCollisionAutomobile extends Model
{
    use HasFactory;
    $timestamps = false;
     protected $fillable = ['franchise','categorie1','categorie2_moins_9_cv','categorie2_plus_9_cv','categorie3_4'];
}
