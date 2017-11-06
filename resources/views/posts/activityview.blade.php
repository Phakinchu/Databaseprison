@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find activity from ID" </p>
  <h1>Activity</h1><br>
  <h2>"Activity ID :  " {{$id_activity}}</h2>
  <h2>"Name  :  " {{$name}}</h2>
  <h2>"Duration   :  " {{$duration}}</h2>
</div>
@endsection