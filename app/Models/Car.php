<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id',
        'marque',
        'modele',
        'annee',
        'puissance',
        'carburant',
        'prix'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function images() {
        return $this->hasMany('App\Models\Image');
    }
}