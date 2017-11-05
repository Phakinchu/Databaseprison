<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    public function prisoners()
    {
        return $this->hasMany('App\Models\Prisoner');
    }

    public function jails()
    {
        return $this->belongsTo('App\Models\Jail');
    }

    public function casedetails()
    {
        return $this->belongsToMany('App\Models\Casedetail','managecase');
    }

    public function prisonerbehavioralhistories()
    {
        return $this->hasMany('App\Models\Prisonerbehavioralhistory');
    }

    public function visithistories()
    {
        return $this->hasMany('App\Models\Visithistory');
    }

}