<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Freeprisonhistory;
use Illuminate\http\Request;
class FreeprisonhistoryController extends Controller
{
    public function index()
    {
        $posts = Freeprisonhistory::all();

        return view('posts.freeprisonhistoryindex', [
          'title' => 'Freeprisonhistory',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('FreeprisonhistoryInsertForm',['title' => "Insert"]);
    }
    
    public function editpage($id)
    {
        return view('FreeprisonhistoryEditForm',['title' => "Edit"])->with('id', $id);
    }
    public function save(Request $request)
    {
        $freeprisonhistory = new Freeprisonhistory;
        $freeprisonhistory->id_freeprison=$request->input('id');
        $freeprisonhistory->freedate=$request->input('freedate');
        $freeprisonhistory->type_of_freedom=$request->input('typefreedom');
        $freeprisonhistory->id_prisoner=$request->input('prisoner');
        $freeprisonhistory->save();
        
        echo "Add Success!!";
        echo"<form action=\"/freeprisonhistories\">
        <input type=\"submit\" value=\"Go To Freeprisonhistory\">
        </form>";
    }
    
    public function delete($id)
    {
        $freeprisonhistory = Freeprisonhistory::findOrFail($id);
        $freeprisonhistory->delete();
        echo "Delete Success!!";
        echo"<form action=\"/freeprisonhistories\">
        <input type=\"submit\" value=\"Go To Freeprisonhistory\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $freeprisonhistory = Freeprisonhistory::findOrFail($id);
        $freeprisonhistory->freedate=$request->input('freedate');
        $freeprisonhistory->type_of_freedom=$request->input('typefreedom');
        $freeprisonhistory->id_prisoner=$request->input('prisoner');
        $freeprisonhistory->save();
        echo "Edit Success!!";
        echo"<form action=\"/freeprisonhistories\">
        <input type=\"submit\" value=\"Go To Freeprisonhistory\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Freeprisonhistory::findOrFail($id);

        return view('posts.freeprisonhistoryview', [
            'title' => 'Freedom',
            'freedate' => $post->freedate,
            'typefreedom' => $post->type_of_freedom,
            'prisoner' => $post->id_prisoner
        ]);
    }

    public function search(Request $request)
    {
        $id = $request->input('id');
        $freeprison = Freeprisonhistory::where('id_prisoner',$id)->get();
        return view('posts.freeprisonhistoryview',[
            'title' => 'Prisoner', 
            'posts' => $freeprison 
        ]);
    }

}
