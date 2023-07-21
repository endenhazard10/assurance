<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifRcAutomobile extends Model
{
    use HasFactory;
    protected $fillable = ['categories','energie','puissance','axa','codeaxa','amsa','wafa','cnart','allianz','nsia','askia'];
}
