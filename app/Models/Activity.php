<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $primaryKey = 'id_activity';
    public $incrementing = false;
    public function areas()
    {
        return $this->belongsToMany('App\Models\Area','eventactivities','id_activity','id_area');
    }

    public function prisoners()
    {
        return $this->belongsToMany('App\Models\Prisoner','plusscore','id_activity','id_prisoner');
    }


}