<?php

namespace App\Http\Controllers;

use App\Cells;

class CellController extends Controller
{
    public function index()
    {
        $posts = Cells::all();

        return view('posts.cell_index', [
          'title' =>  "Cells",
          'posts' => $posts
        ]);
    }

    public function view($id_cell)
    {
        $post = Cells::findOrFail($id_cell);

        return view('posts.view', [
            'title' => "id_cell",
            'post' => $post
        ]);
    }
}