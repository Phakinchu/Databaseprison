@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe5EQpXQbp6s-j03sy6onI8VVmUbzYJ7wftdfHl2_a928Wtrho");
	background-repeat: no-repeat;
    background-size: 120% 120%;
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Level</h1><br>
  <!-- <p class="lead blog-description">All Levels</p> -->
</div>	
	<table class="table table-hover">
		<tr> 
  	<td><center>id_level</center></td>
  	<td><center>lv</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
			<td><center>{{$post->id_level}}</center></td>
			<td><center>{{$post->lv}}</center></td>
			<td><center><a href="/level/{{$post->id_level}}/editpage">Click</a></center></td>
			<td><center><a href="/level/{{$post->id_level}}/delete">Click</a></center></td>
			</tr>
  @endforeach
	</table><br>
	<center><form action="/levels/insertpage"><input type="submit" value="Add Level"></form></center>
	<div align = "right"><form action="/admin"><input type="submit" value="back"></form></div>
</div>
@endsection