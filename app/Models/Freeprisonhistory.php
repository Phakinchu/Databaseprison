<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freeprisonhistory extends Model
{
    public $table = "freeprisonhistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner');
    }



}