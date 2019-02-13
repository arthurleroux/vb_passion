<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renting extends Model
{
    protected $fillable = [
        'customer_id',
        'owner_id',
        'car_id'
    ];

    public function customer() {
        return $this->belongsTo('App\Models\User');
    }

    public function owner() {
        return $this->belongsTo('App\Models\User');
    }

    public function car() {
        return $this->belongsTo('App\Models\Car');
    }
}
