@extends('layouts.app')
@section('content')
<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AreaController extends BaseController
{
    public function index()
    {
        $areas = Area::all();

        return view('posts.areainex',[
            'title' => 'Area',
            'area'  => $areas
        ]);
    }

    public function view($id)
    {
        $area = Area::findOrFail($id);

        return view('posts.areaview',[
            'title' => $area->id_area,
            'level' => $area->level_area,
            'numprisoner' => $area->numbers_of_prisoner,
            'numofficer' => $area->numbers_of_officer,
            'jailid' => $area->jail_id,
        ])
    }
}
@endsection