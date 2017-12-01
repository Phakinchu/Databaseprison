<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $primaryKey = 'id_officer';
    public $table = "officers";
    public $incrementing = false;

    public function prisoners()
    {
        return $this->belongsToMany('App\Models\Prisoner','prisoner_officer','id_officer','id_prisoner');
    }

    public function areas()
    {
        return $this->belongsTo('App\Models\Area','id_area');
    }

    public function casedetails()
    {
        return $this->belongsToMany('App\Models\Casedetail','managecase','id_officer','id_case');
    }

    public function prisonerbehavioralhistories()
    {
        return $this->hasMany('App\Models\Prisonerbehavioralhistory','id_officer');
    }

    public function visithistories()
    {
        return $this->hasMany('App\Models\Visithistory','id_officer');
    }

}