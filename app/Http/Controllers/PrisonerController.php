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
        $count = $posts->count();

        return view('posts.prisonerindex', [
          'title' => 'Prisoner',
          'count' => $count,
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
        $prisoner->id_level=$request->input('level');
        $prisoner->id_cell=$request->input('cell');
        $prisoner->scorepri=$request->input('score');
        $prisoner->save();
        
        echo "Add Success!!";
        echo"<form action=\"/prisoners\">
        <input type=\"submit\" value=\"Go To Prisoner\">
        </form>";
    }

    public function editsupervisepage($id)
    {
        return view('prisonersuperviseditForm')->with('id', $id);
    }

    public function editsupervisesaveadd(Request $request, $id)
    {
        $prisoner = Prisoner::findOrFail($id);
        
        $prisoner->officers()->attach($request->input('id_officer'));
        echo "Edit Success!!";
        echo"<form action=\"/prisoners\">
        <input type=\"submit\" value=\"Go To Prisoner\">
        </form>";
    }

    public function editsupervisesavedelete(Request $request, $id)
    {
        $prisoner = Prisoner::findOrFail($id);       
        $prisoner->officers()->detach($request->input('id_officer'));
        echo "Edit Success!!";
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
        $prisoner->id_level=$request->input('level');
        $prisoner->id_cell=$request->input('cell');
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

        return view('posts.prisonerprofile', [
            'title' => "Prisoner",
            'fname' => $post->fname,
            'lname' => $post->lname,
            'address' => $post->address,
            'dob' => $post->dob,
            'gender' => $post->gender,
            'level' => $post->id_level,
            'score' => $post->scorepri
        ]);
    }

    public function search(Request $request)
    {
        $id = $request->input('id');
        $prison = Prisoner::findOrFail($id);
        return view('posts.prisonerview',[
            'title' => 'Prisoner', 
            'id' => $prison->id_prisoner,
            'fname' => $prison->fname,
            'lname' => $prison->lname,
            'dob' => $prison->dob ,
            'address' => $prison->address,
            'scorepri' => $prison->scorepri,
            'gender' => $prison->gender,
            'idlevel' => $prison->id_level,
            'idcell' => $prison->id_cell
        ]);
    }
}
