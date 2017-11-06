<?php

namespace App\Http\Controllers;

use App\Jails;

class JailController extends Controller
{
    public function index()
    {
        $posts = Jails::all();

        return view('posts.jail_index', [
          'title' => "Jails"
          'posts' => $posts
        ]);
    }

    public function view($id_j)
    {
        $post = Jails::findOrFail($id_j);

        return view('posts.view', [
            'title' => "id_jail",
            'post' => $post
        ]);
    }
}