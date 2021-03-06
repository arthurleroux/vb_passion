<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'car_id',
        'name'
    ];

    public function car() {
        return $this->belongsTo('App\Models\Car');
    }
}
