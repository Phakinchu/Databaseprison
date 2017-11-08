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

        return view('posts.officerindex', [
          'title' => 'Officer',
          'posts' => $posts
        ]);
    }

    public function insertpage()
    {
        return view('officerInsertForm');
    }
    
    public function editpage($id)
    {
        return view('officerEditForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $officer = new Officer;
        $officer->id_officer=$request->input('id');
        $officer->name=$request->input('name');
        $officer->dob=$request->input('dob');
        $officer->position=$request->input('position');
        $officer->gender=$request->input('gender');
        $officer->id_jail=$request->input('jail');
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
        // $prisoner->id_prisoner=$request->input('id');
        $officer->name=$request->input('name');
        $officer->dob=$request->input('dob');
        $officer->position=$request->input('position');
        $officer->gender=$request->input('gender');
        $officer->id_jail=$request->input('jail');
        $officer->save();
        echo "Edit Success!!";
        echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go To Officer\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Officer::findOrFail($id);

        return view('posts.officerview', [
            'title' => 'Gender',
            'name' => $post->name,
            'dob' => $post->dob,
            'position' => $post->position,
            'gender' => $post->gender,
            'jail' => $post->id_jail,
        ]);
    }

}
