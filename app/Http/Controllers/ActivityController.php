<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Activity;
use App\Models\Prisoner;
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
        return view('ActivityInsertForm',['title' => 'Insert']);
    }
    
    public function editpage($id)
    {
        return view('ActivityEditForm',['title' => 'Edit'])->with('id', $id);
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
        return view('activityprisonsuperviseditForm',['title' => 'Insert'])->with('id', $id);
    }

    public function edit_activity_prison_supervisesaveadd(Request $request, $id) //เพิ่มนักโทษไปในกิจกรรม
    {
        $activity = Activity::findOrFail($id);
        if($request->input('id_prisoner') != 0 && $request->input('id_prisoner') != NULL ){ //ไม่ให้ input เป็นช่องว่าง
        $activity->prisoners()->attach($request->input('id_prisoner')); // เพิ่มไปใน table m-n
        $prisoner = Prisoner::findOrFail($request->input('id_prisoner'));  // เพิ่มคะแนนนักโทษที่ร่วมกิจกรรม
        $prisoner->scorepri += 1 ; // เพิ่มคะแนนนักโทษที่ร่วมกิจกรรม
        $prisoner->save(); // เพิ่มคะแนนนักโทษที่ร่วมกิจกรรม
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

    public function edit_activity_prison_supervisesavedelete(Request $request, $id) // ลบนักโทษออกจากกิจกรรม
    {
        $activity = Activity::findOrFail($id);       
        $activity->prisoners()->detach($request->input('id_prisoner')); // ลบจาก table m-n
        echo "Edit Success!!";
        echo"<form action=\"/activities\">
        <input type=\"submit\" value=\"Go To activity\">
        </form>";
    }
    
    public function edit_activity_area_supervisepage($id)
    {
        return view('activityareasuperviseditForm',['title' => 'Edit'])->with('id', $id);
    }

    public function edit_activity_area_supervisesaveadd(Request $request, $id) //เพิ่มผู้คุมไปในกิจกรรม
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

    public function edit_activity_area_supervisesavedelete(Request $request, $id) //ลบผู้คุมออกจากกิจกรรม
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
            'title' => "Activity",
            'activity' => $post->id_activity,
            'duration' => $post->act_duration
        ]);
    }

}
