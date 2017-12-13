<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Area;
use App\Models\Prisoner;
use App\Models\Officer;
use App\Models\Cell;
use Illuminate\http\Request;
use Illuminate\Database\Eloquent\Collection ;
class AreaController extends Controller
{
    public function index(){
    
        $areas = Area::all() ;
        return view('posts.areaindex', [
            'title' => 'area',
            'areas' => $areas
          ]);

    }

    public function insertpage()
    {
        return view('areaInsertForm',['title' => 'Insert']);
    }

    public function save(Request $request)
    {
        $area = new Area;
        $area->id_area=$request->input('id');
        $area->level_area=$request->input('level');
        $area->id_jail=$request->input('idjail');
        $area->save();
        
        echo "Add Success!!";
        echo"<form action=\"/areas\">
        <input type=\"submit\" value=\"Go To Areas\">
        </form>";
    }
    
    /*public function editpage($id)
    {
        return view('ActivityEditForm')->with('id', $id);
    }
    
    
    public function delete($id)
    {
        $activity = Area::findOrFail($id);
        $activity->delete();
        echo "Delete Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To Activity\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $activity = Area::findOrFail($id);
        $activity->activity=$request->input('activity');
        $activity->act_duration=$request->input('duration');
        $activity->save();
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To Activity\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Area::findOrFail($id);

        return view('posts.activityview', [

            'activity' => $post->id_activity,
            'duration' => $post->act_duration
        ]);
    }*/

}
