@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find visit history from ID" </p>
  <h1>Activity</h1><br>
  <h2>"History ID :  " {{$id_visit}}</h2>
  <h2>"Received  :  " {{$log}}</h2>
  <h2>"Visitor's name   :  " {{$name}}</h2>
  <h2>"Contact   :  " {{$contact}}</h2>
  <h2>"Date  :  " {{$date}}</h2>
  <h2>"Time  :  " {{$time}}</h2>
  <h2>"Prisoner ID   :  " {{$id_prisoner}}</h2>
  <h2>"Officer ID   :  " {{$id_officer}}</h2>
</div>
@endsection