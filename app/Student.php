<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = false;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}