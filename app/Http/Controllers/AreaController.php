<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Area;
use App\Models\Prisoner;
use App\Models\Officer;
use Illuminate\http\Request;
use Illuminate\Database\Eloquent\Collection ;
class AreaController extends Controller
{
    public function index()
    {
        $posts = Area::all();
        $officers = Officer::where('id_area', '=', $posts->id_area) ;
        $prisoners = Prisoner::where('id_area', '=', $posts->id_area) ;

        return view('posts.areaindex', [
            'title' => 'area',
            'prisoner' => $prisoners->id_prisoner,
            'officer' => $officers->id_officer,
            'posts' => $posts
          ]);

    }

    /*public function insertpage()
    {
        return view('ActivityInsertForm');
    }
    
    public function editpage($id)
    {
        return view('ActivityEditForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $activity = new Activity;
        $activity->id_activity=$request->input('id');
        $activity->activity=$request->input('activity');
        $activity->act_duration=$request->input('duration');
        $activity->save();
        
        echo "Add Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To Activity\">
        </form>";
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
