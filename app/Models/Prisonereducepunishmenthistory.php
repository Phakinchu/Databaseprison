<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisonereducepunishmenthistory extends Model
{
    public $table = "prisonereducepunishmenthistory";
    public function prisoners()
    {
        return $this->belongsTo('App\Models\Prisoner');
    }


}