<?php

namespace App;

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
}