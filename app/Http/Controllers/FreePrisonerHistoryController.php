<?php

namespace App\Http\Controllers;

use App\FreePrisonerHistories;

class FreePrisonerHistoryController extends Controller
{
    public function index()
    {
        $posts = FreePrisonerHistories::all();

        return view('posts.free_prisoner_index', [
          'title' => "FreePrisonerHistories",
          'posts' => $posts
        ]);
    }

    public function view($id_behav_history)
    {
        $post = FreePrisonerHistories::findOrFail($id_free_prisoner);

        return view('posts.view', [
            'title' => "id_free_prisoner_history",
            'post' => $post
        ]);
    }
}