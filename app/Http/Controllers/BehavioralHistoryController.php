<?php

namespace App\Http\Controllers;

use App\BehavioralHistories;

class BehavioralHistoryController extends Controller
{
    public function index()
    {
        $posts = BehavioralHistories::all();

        return view('posts.behav_history_index', [
          'title' => "BehavioralHistories",
          'posts' => $posts
        ]);
    }

    public function view($id_behav_history)
    {
        $post = BehavioralHistories::findOrFail($id_behav_history);

        return view('posts.view', [
            'title' => "id_behav",
            'post' => $post
        ]);
    }
}