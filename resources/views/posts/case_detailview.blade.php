@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find case detail from ID" </p>
  <h1>Activity</h1><br>
  <h2>"Reative ID :  " {{$id_case}}</h2>
  <h2>"Case section  :  " {{$section}}</h2>
  <h2>"Punishment   :  " {{$lname}}</h2>
  <h2>"Duration  :  " {{$case_duration}}</h2>
  <h2>"Officer ID   :  " {{$id_officer}}</h2>
</div>
@endsection