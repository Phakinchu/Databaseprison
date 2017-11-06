<?php

namespace App\Http\Controllers;

use App\Activities;

class ActivityController extends Controller
{
    public function index()
    {
        $posts = Activities::all();

        return view('posts.activity_index', [
          'title' => "Activities",
          'posts' => $posts
        ]);
    }

    public function view($id_activity)
    {
        $post = Activities::findOrFail($id_activity);

        return view('posts.view', [
            'title' => "id_activity",
            'post' => $post
        ]);
    }
}