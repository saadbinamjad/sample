<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    public function tournaments(){
    	$this->hasMany(Tournament::class);
    }
}
