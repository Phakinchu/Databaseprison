<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public $incrementing = false;

    public function advisedProjects()
    {
        return $this->hasMany('App\Project', 'adviser_id');
    }

    public function committedProjects()
    {
        return $this->belongsToMany('App\Project', 'projects_committees');
    }
}