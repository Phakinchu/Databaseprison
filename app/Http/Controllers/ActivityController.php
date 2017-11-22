<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Activity;
use Illuminate\http\Request;
class ActivityController extends Controller
{
    public function index()
    {
        $posts = Activity::all();

        return view('posts.activityindex', [
          'title' => 'Activity',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
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
        $activity = Activity::findOrFail($id);
        $activity->delete();
        echo "Delete Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To Activity\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->activity=$request->input('activity');
        $activity->act_duration=$request->input('duration');
        $activity->save();
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To Activity\">
        </form>";
    }

    public function edit_activity_prison_supervisepage($id)
    {
        return view('activityprisonsuperviseditForm')->with('id', $id);
    }

    public function edit_activity_prison_supervisesaveadd(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        if($request->input('id_prisoner') != 0 && $request->input('id_prisoner') != NULL ){
        $activity->prisoners()->attach($request->input('id_prisoner'));
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To activity\">
        </form>";
        }
        else {
            echo "Edit UnSuccess!!";
            echo"<form action=\"/activities\">
            <input type=\"submit\" value=\"Go To activity\">
            </form>";
        }
    }

    public function edit_activity_prison_supervisesavedelete(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);       
        $activity->prisoners()->detach($request->input('id_prisoner'));
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To activity\">
        </form>";
    }
    
    public function edit_activity_area_supervisepage($id)
    {
        return view('activityareasuperviseditForm')->with('id', $id);
    }

    public function edit_activity_area_supervisesaveadd(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        if($request->input('id_area') != 0 && $request->input('id_area') != NULL ){
        $activity->areas()->attach($request->input('id_area'));
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To activity\">
        </form>";
        }
        else {
            echo "Edit UnSuccess!!";
            echo"<form action=\"/activities\">
            <input type=\"submit\" value=\"Go To activity\">
            </form>";
        }
    }

    public function edit_activity_area_supervisesavedelete(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);       
        $activity->areas()->detach($request->input('id_area'));
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To activity\">
        </form>";
    }

    public function view($id)
    {
        $post = Activity::findOrFail($id);

        return view('posts.activityview', [

            'activity' => $post->id_activity,
            'duration' => $post->act_duration
        ]);
    }

}
