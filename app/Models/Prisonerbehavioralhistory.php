<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisonerbehavioralhistory extends Model
{
    protected $primaryKey = 'id_behav';
    public $incrementing = false;
    public $table = "prisonerbehavioralhistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner','id_prisoner');
    }

    public function officers()
    {
        return $this->belongsTo('App\Models\Officer');
    }


}