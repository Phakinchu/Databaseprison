<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Officer;
use Illuminate\http\Request;
class OfficerController extends Controller
{
    public function index()
    {
        $posts = Officer::all();
        $count = $posts->count();
        
        return view('posts.officerindex', [
          'title' => 'Officer',
          'count' => $count ,
          'posts' => $posts
        ]);
    }

    public function insertpage()
    {
        return view('officerInsertForm',['title' => 'insert']);
    }
    
    public function editpage($id)
    {
        return view('officerEditForm',['title' => 'Edit'])->with('id', $id);
    }
    public function save(Request $request)
    {
        $officer = new Officer;
        $officer->id_officer=$request->input('id');
        $officer->name=$request->input('name');
        $officer->dob=$request->input('dob');
        $officer->position=$request->input('position');
        $officer->gender=$request->input('gender');
        $officer->id_area=$request->input('area');
        $officer->save();
        
        echo "Add Success!!";
        echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go To Officer\">
        </form>";
    }
    
    public function delete($id)
    {
        $officer = Officer::findOrFail($id);
        $officer->delete();
        echo "Delete Success!!";
        echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go To Officer\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $officer = Officer::findOrFail($id);
        $officer->name=$request->input('name');
        $officer->dob=$request->input('dob');
        $officer->position=$request->input('position');
        $officer->gender=$request->input('gender');
        $officer->id_area=$request->input('area');
        $officer->save();
        echo "Edit Success!!";
        echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go To Officer\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Officer::findOrFail($id);

        return view('posts.officerprofile', [
            'title' => "Officer",
            'name' => $post->name,
            'dob' => $post->dob,
            'position' => $post->position,
            'gender' => $post->gender,
            'area' => $post->id_area
        ]);
    }
    
    public function search(Request $request)
    {
        $id = $request->input('id');
        $officers = Officer::where('name','like','%'.$id.'%')->get();
        return view('posts.officerprofile',[
            'title' => 'Prisoner', 
            'posts' => $officers 
        ]);
    }

}
