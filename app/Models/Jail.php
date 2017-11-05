<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jail extends Model
{
    public function areas()
    {
        return $this->hasMany('App\Models\Area');
    }

    public function officers()
    {
        return $this->hasMany('App\Models\Officer');
    }


}