<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $guarded = [];

    public function comptes(){
    	return $this->hasMany('App\Compte','titulaire');
    }
}
