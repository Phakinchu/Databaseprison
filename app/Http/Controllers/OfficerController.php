<?php

namespace App\Http\Controllers;

use DB;
use App\Officers;

class OfficerController extends Controller
{
    public function index()
    {
        $posts = Officers::all();

        return view('posts.officer_idex', [
          'title' => 'Officers',
          'posts' => $posts
        ]);
    }

    public function view($id_officer)
    {
        $post = Officers::findOrFail($id_officer);

        return view('posts.view', [
            'title' => 'id_officer',
            'post' => $post
        ]);
    }
	
	public function view_by_position($position)
	{
		$officers = DB::table('officers')->where('position', $position);
		
		return view('post.view_by_position', [
			'officers' => $officers,
			'title' => $post->title,
		]);
	}
}