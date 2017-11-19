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
        return $this->belongsTo('App\Models\Officer');
    }

    public function levels()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Models\Activity','plusscore');
    }

    public function cells()
    {
        return $this->hasOne('App\Models\Cell');
    }

    public function relatives()
    {
        return $this->belongsToMany('App\Models\Relative','haverelative');
    }

    public function freeprisonhistories()
    {
        return $this->hasMany('App\Models\Freeprisonhistory');
    }

    public function casedetails()
    {
        return $this->belongsToMany('App\Models\Casedetail','crime');
    }

    public function prisonerbehavioralhistories()
    {
        return $this->hasMany('App\Models\Prisonerbehavioralhistory');
    }

    public function prisonereducepunishmenthistories()
    {
        return $this->hasMany('App\Models\prisonereducepunishmenthistory');
    }

    public function visithistories()
    {
        return $this->hasMany('App\Models\visithistory');
    }

    

}