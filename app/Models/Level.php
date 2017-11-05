<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function prisoners()
    {
        return $this->hasMany('App\Models\Prisoner');
    }


}