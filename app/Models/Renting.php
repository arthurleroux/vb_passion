<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renting extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'date_debut',
        'date_fin'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function car() {
        return $this->belongsTo('App\Models\Car');
    }
}
