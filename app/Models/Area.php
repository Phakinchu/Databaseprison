<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'id_area';
    public $incrementing = false;
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
        return $this->hasMany('App\Models\Cell','id_area');
    }

    public function officers()
    {
        return $this->hasMany('App\Models\Officer','id_area');
    }


}