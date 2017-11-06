<?php

namespace App\Http\Controllers;

use App\Levels;

class LevelController extends Controller
{
    public function index()
    {
        $posts = Levels::all();

        return view('posts.level_index', [
          'title' => "Levels",
          'posts' => $posts
        ]);
    }

    public function view($id_level)
    {
        $post = Levels::findOrFail($id_level);

        return view('posts.view', [
            'title' => "id_level",
            'post' => $post
        ]);
    }
}