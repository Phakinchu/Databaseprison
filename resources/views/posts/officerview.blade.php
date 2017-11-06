@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find Officer From ID" </p>
  <h1>Prisoner</h1><br>
  <h2>"Firstname :  " {{$fname}}</h2>
  <h2>"Lastname  :  " {{$lname}}</h2>
  <h2>"Position   :  " {{$position}}</h2>
  <h2>"DoB       :  " {{$dob}}</h2>
  <h2>"Gender    :  " {{$gender}}</h2>
  <h2>"Jail   :  " {{$id_jail}}</h2>
</div>
@endsection