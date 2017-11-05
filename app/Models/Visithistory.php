<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visithistory extends Model
{
    public $table = "visithistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner');
    }

    public function officers()
    {
        return $this->belongsTo('App\Models\Officer');
    }

}