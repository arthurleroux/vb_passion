<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renting extends Model
{
    public function customer() {
        return $this->belongsTo('App\Models\User');
    }

    public function owner() {
        return $this->belongsTo('App\Models\User');
    }
}
