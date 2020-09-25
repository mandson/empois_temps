<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
protected $guarded=[];
class departement extends Model
{
    //
    public function ufr() { return $this->belongsTo(ufr::class); }

}
