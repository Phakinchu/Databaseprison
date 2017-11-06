<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    protected $primaryKey = 'id_relative';
    public $incrementing = false;
    public function prisoners()
    {
        return $this->belongsToMany('App\Models\Prisoner','haverelative');
    }



}