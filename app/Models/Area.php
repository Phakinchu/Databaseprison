<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function activities()
    {
        return $this->belongsToMany('App\Models\Activity','eventactivities');
    }

    public function jails()
    {
        return $this->belongsTo('App\Models\Jail');
    }

    public function cells()
    {
        return $this->hasMany('App\Models\Cell');
    }



}