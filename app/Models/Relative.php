<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{

    public function prisoners()
    {
        return $this->belongsToMany('App\Models\Prisoner','haverelative');
    }



}