<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Casedetail;
use App\Models\Prisoner;
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
        return view('CasedetailInsertForm',['title' => 'Insert']);
    }
    
    public function editpage($id)
    {
        return view('CasedetailEditForm',['title' => "Edit"])->with('id', $id);
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
            'title' => "CaseDetail",
            'section' => $post->case_section,
            'punishment' => $post->punishment,
            'duration' => $post->case_duration,
            'prisoner' => $post->id_prisoner
        ]);
    }

    public function editsupervisepage($id)
    {
        return view('casedetailsuperviseditForm',['title' => "Edit"])->with('id', $id);
    }

    public function editsupervisesaveadd(Request $request, $id)
    {
        $casedetail = Casedetail::findOrFail($id);
        if($request->input('id_officer') != 0 && $request->input('id_officer') != NULL ){
        $casedetail->officers()->attach($request->input('id_officer'));
        echo "Edit Success!!";
        echo"<form action=\"/casedetails\">
        <input type=\"submit\" value=\"Go To Casedetail\">
        </form>";
        }
        else {
            echo "Edit UnSuccess!!";
            echo"<form action=\"/casedetails\">
            <input type=\"submit\" value=\"Go To Casedetail\">
            </form>";
        }
    }

    public function editsupervisesavedelete(Request $request, $id)
    {
        $casedetail = Casedetail::findOrFail($id);       
        $casedetail->officers()->detach($request->input('id_officer'));
        echo "Edit Success!!";
        echo"<form action=\"/casedetails\">
        <input type=\"submit\" value=\"Go To Casedetail\">
        </form>";
    }

    public function search(Request $request)
    {
        $id = $request->input('id');

        $case = Casedetail::join('prisoners', 'prisoners.id_prisoner', '=', 'case.id_prisoner')
        ->where('prisoners.id_prisoner', '=', $id)
        ->get();

        return view('posts.activityview',[
            'title' => 'Prisoner', 
            'posts' => $case 
        ]);
    }

}
