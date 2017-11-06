@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find relative from ID" </p>
  <h1>Activity</h1><br>
  <h2>"Reative ID :  " {{$id_activity}}</h2>
  <h2>"Name  :  " {{$name}}</h2>
  <h2>"Contact  :  " {{$contact}}</h2>
  <h2>"Relative of prisoner   :  " {{$id_prisoner}}</h2>
</div>
@endsection