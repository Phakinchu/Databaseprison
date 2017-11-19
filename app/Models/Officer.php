<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $primaryKey = 'id_officer';
    public $incrementing = false;

    public function prisoners()
    {
        return $this->hasMany('App\Models\Prisoner');
    }

    public function areas()
    {
        return $this->belongsTo('App\Models\Area');
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