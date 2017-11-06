@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find freed prisoner from ID" </p>
  <h1>Activity</h1><br>
  <h2>"History ID :  " {{$id_free}}</h2>
  <h2>"Date of freedom  :  " {{$dof}}</h2>
  <h2>"Firstname   :  " {{$lname}}</h2>
  <h2>"Lastname   :  " {{$lname}}</h2>
  <h2>"Type of freedom  :  " {{$type}}</h2>
  <h2>"Prisoner ID   :  " {{$id_prisoner}}</h2>
</div>
@endsection