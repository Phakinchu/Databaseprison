<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Prisoner;
use App\Models\Area;

use Laravel\Lumen\Routing\Controller as BaseController;

class ActivityController extends BaseController
{
    public function index()
    {
        $activitys = Activity::all();

        return view('posts.activityindex',[
            'title' = 'Activity';
            'activity' = $activitys;
        ])
    }

    public function view($id){
        $activity = Activity::findOrFail($id);

        return view('posts.activityview',[
            'title' = 'Activity id';
            'activityid' = $activity->id_activity;
            'activity' = $activity->activity;
            'duration' = $activity->act_duration; 
        ])
    }

    // public function acprisoner($prison)
    // {
    //     $tmp = Prisoner::findOrFail($prison);
    //     $prisonerac = ACtivity::findOrFail($tmp);

    // }
}
