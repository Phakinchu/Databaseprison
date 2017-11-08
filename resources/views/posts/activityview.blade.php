@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Activity {{$area->id_area}}"</h1>
  <p class="lead blog-description"> "Show Detail In Activity" </p>
  <h1>Activity Detail</h1><br>
  <h2>"Activity             :  " {{$activity}}</h2>
  <h2>"Duration  :  " {{$duration}}</h2>
</div>
@endsection