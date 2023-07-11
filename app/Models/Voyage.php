<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function villes () {

        return $this->belongsTo(Ville::class, 'ville_d', 'ville_a');

    }

    public function agences () {

        return $this->belongsTo(Agence::class, 'agence_d', 'agence_a');

    }


}
