<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remboursement extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function paiement () {

        return $this->belongsTo(Paiement::class, 'paiement_id');

    }

    public function spend () {

        return $this->belongsTo(Spend::class, 'spend_id');

    }


}
