<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compagnie extends Model
{
    use HasFactory;
    protected $fillable=['nom','adresse','bp'];
}
