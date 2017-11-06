@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find level from ID" </p>
  <h1>Level</h1><br>
  <h2>"Level ID :  " {{$id_level}}</h2>
  <h2>"Score  :  " {{$score}}</h2>
  <h2>"Number of prisoners   :  " {{$number_of_prisoners}}</h2>
</div>
@endsection