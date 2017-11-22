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