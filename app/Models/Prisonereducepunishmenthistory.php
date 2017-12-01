<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisonereducepunishmenthistory extends Model
{
    protected $primaryKey = 'id_reducehis';
    public $incrementing = false;
    public $table = "prisonereducepunishmenthistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner','id_prisoner');
    }


}