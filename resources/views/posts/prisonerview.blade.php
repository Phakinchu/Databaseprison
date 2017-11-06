@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find Prisoner From CODE" </p>
  <h1>Prisoner</h1><br>
  <h2>"Firstname :  " {{$fname}}</h2>
  <h2>"Lastname  :  " {{$lname}}</h2>
  <h2>"Address   :  " {{$address}}</h2>
  <h2>"dob       :  " {{$dob}}</h2>
  <h2>"gender    :  " {{$gender}}</h2>
  <h2>"Level     :  " {{$id_level}}</h2>
  <h2>"Officer   :  " {{$id_officer}}</h2>
</div>
@endsection