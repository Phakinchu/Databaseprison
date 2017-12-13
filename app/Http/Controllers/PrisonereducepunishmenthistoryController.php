<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prisonereducepunishmenthistory;
use Illuminate\http\Request;
class PrisonereducepunishmenthistoryController extends Controller
{
    public function index()
    {
        $posts = Prisonereducepunishmenthistory::all();

        return view('posts.prisonereducepunishmenthistoryindex', [
          'title' => 'Prisonereducepunishmenthistory',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('PrisonereducepunishmenthistoryInsertForm',['title' => 'Insert']);
    }
    
    public function editpage($id)
    {
        return view('PrisonereducepunishmenthistoryEditForm',['title' => 'Edit'])->with('id', $id);
    }
    public function save(Request $request)
    {
        $prisonereducepunishmenthistory = new Prisonereducepunishmenthistory;
        $prisonereducepunishmenthistory->id_reducehis=$request->input('id');
        $prisonereducepunishmenthistory->cause_reduce=$request->input('cause');
        $prisonereducepunishmenthistory->time_reducted=$request->input('time');
        $prisonereducepunishmenthistory->start_datereduce=$request->input('date');
        $prisonereducepunishmenthistory->id_prisoner=$request->input('prisoner');
        $prisonereducepunishmenthistory->save();
        
        echo "Add Success!!";
        echo"<form action=\"/prisonereducepunishmenthistories\">
        <input type=\"submit\" value=\"Go To Prisonereducepunishmenthistory\">
        </form>";
    }
    
    public function delete($id)
    {
        $prisonereducepunishmenthistory = Prisonereducepunishmenthistory::findOrFail($id);
        $prisonereducepunishmenthistory->delete();
        echo "Delete Success!!";
        echo"<form action=\"/prisonereducepunishmenthistories\">
        <input type=\"submit\" value=\"Go To Prisonereducepunishmenthistory\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $prisonereducepunishmenthistory = Prisonereducepunishmenthistory::findOrFail($id);
        $prisonereducepunishmenthistory->cause_reduce=$request->input('cause');
        $prisonereducepunishmenthistory->time_reducted=$request->input('time');
        $prisonereducepunishmenthistory->start_datereduce=$request->input('date');
        $prisonereducepunishmenthistory->id_prisoner=$request->input('prisoner');
        $prisonereducepunishmenthistory->save();
        echo "Edit Success!!";
        echo"<form action=\"/prisonereducepunishmenthistories\">
        <input type=\"submit\" value=\"Go To Prisonereducepunishmenthistory\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Prisonereducepunishmenthistory::findOrFail($id);

        return view('posts.prisonereducepunishmenthistoryview', [
            'title' => "Reduce",
            'cause' => $post->cause_reduce,
            'time' => $post->time_reducted,
            'date' => $post->start_datereduce,
            'prisoner' => $post->id_prisoner
        ]);
    }

}
