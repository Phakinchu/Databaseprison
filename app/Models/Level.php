<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $primaryKey = 'id_level';
    public $incrementing = false;
    public function prisoners()
    {
        return $this->hasMany('App\Models\Prisoner');
    }


}