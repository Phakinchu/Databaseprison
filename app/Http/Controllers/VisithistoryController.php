<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Visithistory;
use Illuminate\http\Request;
class VisithistoryController extends Controller
{
    public function index()
    {
        $posts = Visithistory::all();

        return view('posts.visithistoryindex', [
          'title' => 'Visithistory',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('VisithistoryInsertForm');
    }
    
    public function editpage($id)
    {
        return view('VisithistoryEditForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $visithistory = new Visithistory;
        $visithistory->id_visit=$request->input('id');
        $visithistory->name=$request->input('name');
        $visithistory->item=$request->input('item');
        $visithistory->contract_detail=$request->input('contract');
        $visithistory->Datetime=$request->input('datetime');
        $visithistory->id_prisoner=$request->input('prisoner');
        $visithistory->id_officer=$request->input('officer');
        $visithistory->save();
        
        echo "Add Success!!";
        echo"<form action=\"/visithistories\">
        <input type=\"submit\" value=\"Go To Visithistory\">
        </form>";
    }
    
    public function delete($id)
    {
        $visithistory = Visithistory::findOrFail($id);
        $visithistory->delete();
        echo "Delete Success!!";
        echo"<form action=\"/visithistories\">
        <input type=\"submit\" value=\"Go To Visithistory\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $visithistory = Visithistory::findOrFail($id);
        $visithistory->name=$request->input('name');
        $visithistory->item=$request->input('item');
        $visithistory->contract_detail=$request->input('contract');
        $visithistory->Datetime=$request->input('datetime');
        $visithistory->id_prisoner=$request->input('prisoner');
        $visithistory->id_officer=$request->input('officer');
        $visithistory->save();
        echo "Edit Success!!";
        echo"<form action=\"/visithistories\">
        <input type=\"submit\" value=\"Go To Visithistory\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Visithistory::findOrFail($id);

        return view('posts.visithistoryview', [
             //'title' => 'Gender',
            'name' => $post->name,
            'item' => $post->item,
            'contract' => $post->contract_detail,
            'datetime' => $post->Datetime,
            'prisoner' => $post->id_prisoner,
            'officer' => $post->id_officer,
        ]);
    }

}
