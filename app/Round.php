<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public function motions(){
    	$this->hasMany(Motion::class);
    }
}
