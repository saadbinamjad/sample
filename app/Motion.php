<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motion extends Model
{
	
    public function user(){
    	$this->belongsTo(User::class);
    }
    public function round(){
    	$this->belongsTo(Round::class);
    }
    public function tournament(){
    	$this->belongsTo(Tournament::class);
    }
}
