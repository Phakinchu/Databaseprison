@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Search by position</h1>
  <p class="lead blog-description">Find officer from position</p>
  @foreach ($officers as $officer)
	<a href="/officers/{{ $officers->id }}"><p>Officer id: {{ $officers->id }}</p></a>
	<h2>"Firstname :  " {{$officers->fname}}</h2>
	<h2>"Lastname  :  " {{$officers->lname}}</h2>
	<h2>"Position   :  " {{$officers->position}}</h2>
	<h2>"DoB       :  " {{$officers->dob}}</h2>
	<h2>"Gender    :  " {{$officers->gender}}</h2>
	<h2>"Jail   :  " {{$officers->id_jail}}</h2>
  @endforeach
</div>
@endsection