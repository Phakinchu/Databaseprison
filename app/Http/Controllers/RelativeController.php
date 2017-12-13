<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Relative;
use Illuminate\http\Request;
class RelativeController extends Controller
{
    public function index()
    {
        $posts = Relative::all();
        $count = $posts->count();
        
        return view('posts.relativeindex', [
          'title' => 'Relative',
          'count' => $count ,
          'posts' => $posts
        ]);
    }

    public function insertpage()
    {
        return view('relativeInsertForm',['title' => 'Insert']);
    }
    
    public function editpage($id)
    {
        return view('relativEditForm',['title' => 'Edit'])->with('id', $id);
    }
    public function save(Request $request)
    {
        $relative = new Relative;
        $relative->id_relative=$request->input('id_relative');
        $relative->name=$request->input('name');
        $relative->contractdetail=$request->input('contractdetail');
        $relative->save();
        
        echo "Add Success!!";
        echo"<form action=\"/relatives\">
        <input type=\"submit\" value=\"Go To Relative\">
        </form>";
    }
    
    public function delete($id)
    {
        $relative = Relative::findOrFail($id);
        $relative->delete();
        echo "Delete Success!!";
        echo"<form action=\"/relatives\">
        <input type=\"submit\" value=\"Go To Relative\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $relative = Relative::findOrFail($id);
        $relative->name=$request->input('name');
        $relative->contractdetail=$request->input('contractdetail');
        $relative->save();
        echo "Edit Success!!";
        echo"<form action=\"/relatives\">
        <input type=\"submit\" value=\"Go To Relative\">
        </form>";
    }
    
    public function editsupervisepage($id)
    {
        return view('relativesuperviseditForm',['title' => 'supervise'])->with('id', $id);
    }

    public function editsupervisesaveadd(Request $request, $id)
    {
        $relative = Relative::findOrFail($id);
        if($request->input('id_prisoner') != 0 && $request->input('id_prisoner') != NULL ){
        $relative->prisoners()->attach($request->input('id_prisoner'));
        echo "Edit Success!!";
        echo"<form action=\"/relatives\">
        <input type=\"submit\" value=\"Go To relative\">
        </form>";
        }
        else {
            echo "Edit UnSuccess!!";
            echo"<form action=\"/relatives\">
            <input type=\"submit\" value=\"Go To relative\">
            </form>";
        }
    }

    public function editsupervisesavedelete(Request $request, $id)
    {
        $relative = relative::findOrFail($id);       
        $relative->prisoners()->detach($request->input('id_prisoner'));
        echo "Edit Success!!";
        echo"<form action=\"/relatives\">
        <input type=\"submit\" value=\"Go To relative\">
        </form>";
    }

    public function search(Request $request)
    {
        $id = $request->input('id');
        $relative = relative::where('name',$id)->get();
        return view('posts.relativeview',[
            'title' => 'Prisoner', 
            'posts' => $relative 
        ]);
    }

}
