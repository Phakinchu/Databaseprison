<?php

namespace App\Http\Controllers;

use App\Areas;

class AreaController extends Controller
{
    public function index()
    {
        $posts = Areas::all();

        return view('posts.area_index', [
          'title' => "Areas",
          'posts' => $posts
        ]);
    }

    public function view($id_area)
    {
        $post = Areas::findOrFail($id_area);

        return view('posts.view', [
            'title' => "id_area",
            'post' => $post
        ]);
    }
}