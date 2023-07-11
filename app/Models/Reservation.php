<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function client () {

        return $this->belongsTo(Client::class, 'client_id');

    }

    public function voyage () {

        return $this->belongsTo(Voyage::class, 'voyage_id');

    }

    public function user () {

        return $this->belongsTo(User::class, 'user_id');

    }

    public function type_reservation () {

        return $this->belongsTo(Type_reservation::class, 'type_reservation_id');

    }


}
