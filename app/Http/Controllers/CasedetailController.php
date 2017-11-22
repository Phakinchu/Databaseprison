<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Casedetail;
use Illuminate\http\Request;
class CasedetailController extends Controller
{
    public function index()
    {
        $posts = Casedetail::all();

        return view('posts.casedetailindex', [
          'title' => 'Casedetail',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('CasedetailInsertForm');
    }
    
    public function editpage($id)
    {
        return view('CasedetailEditForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $casedetail = new Casedetail;
        $casedetail->id_case=$request->input('id');
        $casedetail->case_section=$request->input('section');
        $casedetail->punishment=$request->input('punishment');
        $casedetail->case_duration=$request->input('duration');
        $casedetail->id_prisoner=$request->input('prisoner');
        $casedetail->save();
        
        echo "Add Success!!";
        echo"<form action=\"/casedetails\">
        <input type=\"submit\" value=\"Go To Casedetail\">
        </form>";
    }
    
    public function delete($id)
    {
        $casedetail = Casedetail::findOrFail($id);
        $casedetail->delete();
        echo "Delete Success!!";
        echo"<form action=\"/casedetails\">
        <input type=\"submit\" value=\"Go To Casedetail\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $casedetail = Casedetail::findOrFail($id);
        $casedetail->case_section=$request->input('section');
        $casedetail->punishment=$request->input('punishment');
        $casedetail->case_duration=$request->input('duration');
        $casedetail->id_prisoner=$request->input('prisoner');
        $casedetail->save();
        echo "Edit Success!!";
        echo"<form action=\"/casedetails\">
        <input type=\"submit\" value=\"Go To Casedetail\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Casedetail::findOrFail($id);

        return view('posts.casedetailview', [

            'section' => $post->case_section,
            'punishment' => $post->punishment,
            'duration' => $post->case_duration,
            'prisoner' => $post->id_prisoner
        ]);
    }

}
