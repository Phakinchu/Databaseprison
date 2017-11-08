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

    public function view($id_officer)
    {
        $officer = Officer::findOrFail($id_officer);

        return view('posts.officerview', [
					'title' => "View by ID",
					'id_officer' => $officer->id_officer,
					'name' => $officer->name ,
					'gender' => $officer->gender,
					'position' => $officer->position,
					'dob' => $officer->dob,
					'jail_id' => $officer->id_jail]
					);
    }
	
	public function view_by_position($position)
	{
		$officers = Officer::where('position', $position);
		
		return view('posts.officerview_by_position', [
					'title' => "View by position",
					'officer_id' => $officers->id_officer,
					'name' => $officers->name ,
					'gender' => $officers->gender,
					'position' => $officers->position,
					'dob' => $officers->dob,
					'jail_id' => $officers->id_jail]
					);
		
	}
	
	public function view_by_gender(Request $request, $gender )
	{
		$officers = Officer::where('gender', $gender);
		return view('posts.officerview_by_gender', [
					'title' => "View by gender",
					'officer_id' => $officer->id_officer,
					'name' => $officer->name ,
					'gender' => $officer->gender,
					'position' => $officer->position,
					'dob' => $officer->dob,
					'jail_id' => $officer->id_jail]
					);
		
	}

	public function view_by_prisoner($id_prisoner)
	{
		$officers = Officer::findOrFail($id_prisoner);
		
		return view('posts.officerview_by_prisoner', [
					'title' => "View by prisoner ID",
					'officer_id' => $officer->id_officer,
					'name' => $officer->name,
					'gender' => $officer->gender,
					'position' => $officer->position,
					'dob' => $officer->dob,
					'jail_id' => $officer->id_jail]
					);
	}

	public function view_by_name($name)
	{
		$officers = officer::where('name', $name);
		
		return view('posts.officerview_by_name', [
					'title' => "View by name",
					'officer_id' => $officer->id_officer,
					'name' => $officer->name,
					'gender' => $officer->gender,
					'position' => $officer->position,
					'dob' => $officer->dob,
					'jail_id' => $officer->id_jail]
					);
	}

	public function insertpage()
    {
        return view('officerInsertForm');
    }
	
	public function save(Request $request)
    {
        $officer = new Officer;
		$officer->id_officer=$request->input('id');
        $officer->name=$request->input('name');
        $officer->gender=$request->input('gender');
        $officer->dob=$request->input('dob');
        $officer->position=$request->input('position');
		$officer->id_jail=$request->input('id_jail');
		if(empty($officer->id_officer)) {
			echo "primarykey is empty" ;
		}
		else{
        $officer->save(); 
		}
		echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go to all officers\">
		</form>";
    }
	
	public function editpage($id_officer)
    {
        return view('officerEditForm')->with('id', $id_officer);
    }
	
	public function editsave(Request $request, $id_officer)
    {
        $officer = Officer::findOrFail($id_officer);
        $officer->name=$request->input('name');
        $officer->gender=$request->input('gender');
        $officer->dob=$request->input('dob');
        $officer->position=$request->input('position');
		$officer->id_jail=$request->input('id_jail');
		
        $officer->save();
		
        echo "Edit Success!!";
        echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go to all officers\">
        </form>";
    }
	
	public function delete($id_officer)
    {
        $officer = Officer::findOrFail($id_officer);
        $officer->delete();
		
        echo "Delete Success!!";
        echo"<form action=\"/officers\">
        <input type=\"submit\" value=\"Go to all officers\">
        </form>";
    }
}