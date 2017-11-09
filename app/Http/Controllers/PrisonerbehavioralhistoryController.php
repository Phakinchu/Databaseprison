<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prisonerbehavioralhistory;
use Illuminate\http\Request;
class PrisonerbehavioralhistoryController extends Controller
{
    public function index()
    {
        $posts = Prisonerbehavioralhistory::all();

        return view('posts.prisonerbehavioralhistoryindex', [
          'title' => 'Prisonerbehavioralhistory',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('PrisonerbehavioralhistoryInsertForm');
    }
    
    public function editpage($id)
    {
        return view('PrisonerbehavioralhistoryEditForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $prisonerbehavioralhistory = new Prisonerbehavioralhistory;
        $prisonerbehavioralhistory->id_behav=$request->input('id');
        $prisonerbehavioralhistory->crime=$request->input('crime');
        $prisonerbehavioralhistory->guilt=$request->input('guilt');
        $prisonerbehavioralhistory->start_date=$request->input('start_date');
        $prisonerbehavioralhistory->end_date=$request->input('end_date');
        $prisonerbehavioralhistory->id_prisoner=$request->input('prisoner');
        $prisonerbehavioralhistory->save();
        
        echo "Add Success!!";
        echo"<form action=\"/prisonerbehavioralhistories\">
        <input type=\"submit\" value=\"Go To Prisonerbehavioralhistory\">
        </form>";
    }
    
    public function delete($id)
    {
        $prisonerbehavioralhistory = Prisonerbehavioralhistory::findOrFail($id);
        $prisonerbehavioralhistory->delete();
        echo "Delete Success!!";
        echo"<form action=\"/prisonerbehavioralhistories\">
        <input type=\"submit\" value=\"Go To Prisonerbehavioralhistory\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $prisonerbehavioralhistory = Prisonerbehavioralhistory::findOrFail($id);
        $prisonerbehavioralhistory->crime=$request->input('crime');          
        $prisonerbehavioralhistory->guilt=$request->input('guilt');
        $prisonerbehavioralhistory->start_date=$request->input('start_date');
        $prisonerbehavioralhistory->end_date=$request->input('end_date');
        $prisonerbehavioralhistory->id_prisoner=$request->input('prisoner');
        $prisonerbehavioralhistory->save();
        echo "Edit Success!!";
        echo"<form action=\"/prisonerbehavioralhistories\">
        <input type=\"submit\" value=\"Go To Prisonerbehavioralhistory\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Prisonerbehavioralhistory::findOrFail($id);

        return view('posts.prisonerbehavioralhistoryview', [
            'crime' => $post->crime,
            'guilt' => $post->guilt,
            'start_date' => $post->start_date,
            'end_date' => $post->end_date,
            'prisoner' => $post->id_prisoner,

        ]);
    }

}
