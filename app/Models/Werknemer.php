<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Werknemer extends Model
{
    public $timestamps = false;

    protected $fillable = ["naam", "telefoon", "email", "functie_id"];
}
