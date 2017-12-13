<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Cell;
use App\Models\Officer;
use App\Models\Prisoner;
use Illuminate\http\Request;
class CellController extends Controller
{
    public function index()
    {
        $cells = Cell::with('prisoners')->get() ;

        return view('posts.cellindex', [
            'title' => 'cell',
            'cells' => $cells          
          ]);
    }

    public function view($id)
    {
        $post = Cell::findOrFail($id);

        return view('posts.casedetailview', [
            'title' => 'cell',
            'section' => $post->case_section,
            'punishment' => $post->punishment,
            'duration' => $post->case_duration,
            'officer' => $post->id_officer
        ]);
    }

}
