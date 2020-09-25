<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $fillable = ['rol-item'];
public function users()
{
    return $this->belongsToMany(users::class);
}

}
