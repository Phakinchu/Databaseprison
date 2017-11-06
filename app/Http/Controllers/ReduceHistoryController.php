<?php

namespace App\Http\Controllers;

use App\ReduceHistories;

class ReduceHistoryController extends Controller
{
    public function index()
    {
        $posts = ReduceHistories::all();

        return view('posts.reduce_index', [
          'title' => "ReduceHistories",
          'posts' => $posts
        ]);
    }

    public function view($id_reduce_history)
    {
        $post = ReduceHistories::findOrFail($id_reduce_history);

        return view('posts.view', [
            'title' => "id_reduce_history",
            'post' => $post
        ]);
    }
}