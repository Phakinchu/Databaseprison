<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visithistory extends Model
{
    protected $primaryKey = 'id_visit';
    public $table = "visithistory";
    public $incrementing = false;
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner','id_prisoner');
    }

    public function officers()
    {
        return $this->belongsTo('App\Models\Officer','id_officer');
    }

}