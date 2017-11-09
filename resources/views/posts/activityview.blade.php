@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find Activity From CODE" </p>
  <h1>Activity</h1><br>
  <h2>"activity  :  " {{$activity}}</h2>
  <h2>"duration   :  " {{$act_duration}}</h2>
</div>
@endsection