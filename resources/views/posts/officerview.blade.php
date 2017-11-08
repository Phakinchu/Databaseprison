@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find Officer From CODE" </p>
  <h1>Officer</h1><br>
  <h2>"Name :  " {{$name}}</h2>
  <h2>"dob       :  " {{$dob}}</h2>
  <h2>"position   :  " {{$position}}</h2>
  <h2>"gender    :  " {{$gender}}</h2>
  <h2>"jail     :  " {{$id_jail}}</h2>
</div>
@endsection