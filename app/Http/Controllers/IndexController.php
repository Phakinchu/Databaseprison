<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home'
        ]);
    }

    public function indexadmin()
    {
        return view('posts.adminindex', [
            'title' => 'Home'
        ]);
    }

}
