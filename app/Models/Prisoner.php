<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{   
    
    public $incrementing = false;
    protected $primaryKey = 'id_prisoner';
    public $table = "prisoners";
    
    public function officers()
    {
        return $this->belongsToMany('App\Models\Officer','prisoner_officer','id_prisoner','id_officer');
    }

    public function levels()
    {
        return $this->belongsTo('App\Models\Level','id_level');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Models\Activity','plusscore','id_prisoner','id_activity');
    }

    public function cells()
    {
        return $this->belongsTo('App\Models\Cell','id_prisoner');
    }

    public function relatives()
    {
        return $this->belongsToMany('App\Models\Relative','haverelative','id_prisoner','id_relative');
    }

    public function freeprisonhistories()
    {
        return $this->hasMany('App\Models\Freeprisonhistory','id_prisoner');
    }

    public function casedetails()
    {
        return $this->hasMany('App\Models\Casedetail','id_prisoner');
    }

    public function prisonerbehavioralhistories()
    {
        return $this->hasMany('App\Models\Prisonerbehavioralhistory','id_prisoner');
    }

    public function prisonereducepunishmenthistories()
    {
        return $this->hasMany('App\Models\prisonereducepunishmenthistory','id_prisoner');
    }

    public function visithistories()
    {
        return $this->hasMany('App\Models\visithistory','id_prisoner');
    }

    

}