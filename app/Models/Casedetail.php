<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Casedetail extends Model
{
    protected $primaryKey = 'id_case';
    public $incrementing = false;
    public function prisoners()
    {
        return $this->belongsToMany('App\Models\Prisoner','crime');
    }

    public function officers()
    {
        return $this->belongsToMany('App\Models\Officer','managecase');
    }


}