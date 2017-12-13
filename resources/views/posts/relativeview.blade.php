@extends('layouts.app')

@section('content')
<div class="blog-header" align = "center">
  <h1 class="blog-title">Relative List</h1><br>
	<!-- <p class="lead blog-description">All relative</p> -->
<div>  
  <table class="table table-hover">
  <tr> 
  	<td><center>Relative ID</center></td>
  	<td><center>name</center></td>
  	<td><center>Contract detail</center></td>
    <td><center>รายชื่อญาติ</center></td>
    </tr>
    @foreach ($posts as $post)
    <tr>
	  <td><center>{{$post->id_relative}}</center></td>
	  <td><center>{{$post->name}}</center></td>
  	<td><center>{{$post->contractdetail}}</center></td>
    <td><center>
    @foreach ($post->prisoners as $prisoner)
    name :{{$prisoner->fname}}<br>
    @endforeach
    </center></td>
	</tr>
  @endforeach

</div>
@endsection