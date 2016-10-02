<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function host(){
    	$this->belongsTo(Host::class);
    }

    public function motions(){
    	$this->hasMany(Motion::class);
    }
}
