<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisonerbehavioralhistory extends Model
{
    public $table = "prisonerbehavioralhistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner');
    }

    public function officers()
    {
        return $this->belongsTo('App\Models\Officer');
    }


}