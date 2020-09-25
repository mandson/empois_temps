<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ufr extends Model
{
    protected $guarded=[];
    //
    public function departements() { return $this->hasMany('App\departement'); }

}

