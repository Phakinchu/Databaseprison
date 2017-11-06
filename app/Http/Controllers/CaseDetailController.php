<?php

namespace App\Http\Controllers;

use App\CaseDetails;

class CaseDetailController extends Controller
{
    public function index()
    {
        $posts = CaseDetails::all();

        return view('posts.case_detail_index', [
          'title' => "CaseDetails",
          'posts' => $posts
        ]);
    }

    public function view($id_case)
    {
        $post = CaseDetails::findOrFail($id_case);

        return view('posts.view', [
            'title' => "id_case",
            'post' => $post
        ]);
    }
}