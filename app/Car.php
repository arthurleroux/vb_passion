<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id',
        'brand',
        'model',
        'year',
        'horsepower',
        'fuel',
        'price'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}