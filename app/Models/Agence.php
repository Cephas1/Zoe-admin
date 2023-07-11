<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agence extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function ville (){

        return $this->belongsTo(ville::class, 'ville_id');

    }
}
