<?php

namespace App\Http\Controllers;

use App\Visits;

class VisitController extends Controller
{
    public function index()
    {
        $posts = Visits::all();

        return view('posts.visit_index', [
          'title' => "Visits",
          'posts' => $posts
        ]);
    }

    public function view($id_visit)
    {
        $post = Visits::findOrFail($id_visit);

        return view('posts.view', [
            'title' => "id_visit",
            'post' => $post
        ]);
    }
}