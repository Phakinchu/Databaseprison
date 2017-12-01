<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freeprisonhistory extends Model
{
    protected $primaryKey = 'id_freeprison';
    public $incrementing = false;
    public $table = "freeprisonhistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner','id_prisoner');
    }



}