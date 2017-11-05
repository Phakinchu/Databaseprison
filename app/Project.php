<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function adviser()
    {
        return $this->belongsTo('App\Lecturer');
    }

    public function committees()
    {
        return $this->belongsToMany('App\Lecturer', 'projects_committees');
    }
}