<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThierceCompleteAutomobile extends Model
{
    use HasFactory;
    protected $fillable = ['franchise','categorie1','categorie2'];
}
