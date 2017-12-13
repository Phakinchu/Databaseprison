<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    protected $primaryKey = 'id_cell';
    public $incrementing = false;
    public $table = "cells";
    public function areas()
    {
        return $this->belongsTo('App\Models\Area','id_area');
    }

    public function prisoners()
    {
        return $this->hasMany('App\Models\Prisoner', 'id_cell');
    }

    public function countprisoner()
    {
        return $this->prisoners->count() ;
    }
    
}