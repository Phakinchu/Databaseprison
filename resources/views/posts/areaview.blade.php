@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find area from ID" </p>
  <h1>Area</h1><br>
  <h2>"Area ID :  " {{$id_area}}</h2>
  <h2>"Level  :  " {{$level}}</h2>
  <h2>"Number of prisoners   :  " {{$number_of_prisoners}}</h2>
  <h2>"Number of officers   :  " {{$number_of_officers}}</h2>
  <h2>"Jail   :  " {{$id_jail}}</h2>
</div>
@endsection