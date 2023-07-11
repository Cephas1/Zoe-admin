<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spend extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function spend_type () {

        return $this->belongsTo(Spend_type::class, 'spend_type_id');

    }

}
