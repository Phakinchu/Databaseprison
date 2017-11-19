<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jail extends Model
{
    protected $primaryKey = 'id_jail';
    public $incrementing = false;
    public function areas()
    {
        return $this->hasMany('App\Models\Area');
    }


}