<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    protected $primaryKey = 'id_cell';
    public $incrementing = false;
    public function areas()
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner');
    }



}