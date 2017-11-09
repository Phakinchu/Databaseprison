<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prisoner;
use Illuminate\http\Request;
class PrisonerController extends Controller
{
    public function index()
    {
        $posts = Prisoner::all();

        return view('posts.prisonerindex', [
          'title' => 'Prisoner',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('insertForm');
    }
    
    public function editpage($id)
    {
        return view('editForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $prisoner = new Prisoner;
        $prisoner->id_prisoner=$request->input('id');
        $prisoner->fname=$request->input('fname');
        $prisoner->lname=$request->input('lname');
        $prisoner->gender=$request->input('gender');
        $prisoner->dob=$request->input('dob');
        $prisoner->address=$request->input('address');
        $prisoner->id_officer=$request->input('officer');
        $prisoner->id_level=$request->input('level');
        $prisoner->scorepri=$request->input('score');
        $prisoner->save();
        
        echo "Add Success!!";
        echo"<form action=\"/prisoners\">
        <input type=\"submit\" value=\"Go To Prisoner\">
        </form>";
    }
    
    public function delete($id)
    {
        $prisoner = Prisoner::findOrFail($id);
        $prisoner->delete();
        echo "Delete Success!!";
        echo"<form action=\"/prisoners\">
        <input type=\"submit\" value=\"Go To Prisoner\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $prisoner = Prisoner::findOrFail($id);
        // $prisoner->id_prisoner=$request->input('id');
        $prisoner->fname=$request->input('fname');          
        $prisoner->lname=$request->input('lname');
        $prisoner->gender=$request->input('gender');
        $prisoner->dob=$request->input('dob');
        $prisoner->address=$request->input('address');
        $prisoner->id_officer=$request->input('officer');
        $prisoner->id_level=$request->input('level');
        $prisoner->scorepri=$request->input('score');
        $prisoner->save();
        echo "Edit Success!!";
        echo"<form action=\"/prisoners\">
        <input type=\"submit\" value=\"Go To Prisoner\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Prisoner::findOrFail($id);

        return view('posts.prisonerview', [
            'title' => 'Gender',
            'fname' => $post->fname,
            'lname' => $post->lname,
            'address' => $post->address,
            'dob' => $post->dob,
            'gender' => $post->gender,
            'officer' => $post->id_officer,
            'level' => $post->id_level,
            'score' => $post->scorepri,
        ]);
    }

}
