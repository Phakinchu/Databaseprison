<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Level;
use Illuminate\http\Request;
class LevelController extends Controller
{
    public function index()
    {
        $posts = Level::all();

        return view('posts.levelindex', [
          'title' => 'Level',
          'posts' => $posts
    
        ]);
    }

    public function insertpage()
    {
        return view('LevelInsertForm');
    }
    
    public function editpage($id)
    {
        return view('LevelEditForm')->with('id', $id);
    }
    public function save(Request $request)
    {
        $level = new Level;
        $level->id_level=$request->input('id');
        $level->score=$request->input('score');
        $level->lv=$request->input('lv');
        $level->save();
        
        echo "Add Success!!";
        echo"<form action=\"/levels\">
        <input type=\"submit\" value=\"Go To Level\">
        </form>";
    }
    
    public function delete($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();
        echo "Delete Success!!";
        echo"<form action=\"/levels\">
        <input type=\"submit\" value=\"Go To Level\">
        </form>";
    }
    
    public function editsave(Request $request, $id)
    {
        $level = Level::findOrFail($id);
        $level->score=$request->input('score');
        $level->lv=$request->input('lv');
        $level->save();
        echo "Edit Success!!";
        echo"<form action=\"/levels\">
        <input type=\"submit\" value=\"Go To Level\">
        </form>";
    }
    

    public function view($id)
    {
        $post = Level::findOrFail($id);

        return view('posts.levelview', [

            'score' => $post->score,
            'lv' => $post->lv,
        ]);
    }

}
