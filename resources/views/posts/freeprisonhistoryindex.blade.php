@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi1V4UQC2Lb6cuhD_vxVVXh-UXbfPSDOAyV7ROwreQM1yTS4pT");
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
<div align = "right">
<form action="/freeprisonhistory/search" method="post">Search By ID prisoner <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Freeprison History List</h1><br>
	<!-- <p class="lead blog-description">All freeprisonhistories</p> -->
</div>	
  <table class="table table-hover"><tr> 
  	<td><center>IDfreeprison</center></td>
  	<td><center>freedate</center></td>
    <td><center>typefreedom</center></td>
		<td><center>Prisoner ID</center></td>
  	<td><center>Prisoner name</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_freeprison}}</center></td>
		<td><center>{{$post->freedate}}</center></td>
    <td><center>{{$post->type_of_freedom}}</center></td>
		<td><center>{{$post->id_prisoner}}</center></td>
		<td><center>{{$post->prisoners->fname}}  {{$post->prisoners->lname}}</center></td>
		<td><center><a href="/freeprisonhistory/{{$post->id_freeprison}}/editpage">Click</a></center></td>
		<td><center><a href="/freeprisonhistory/{{$post->id_freeprison}}/delete">Click</a></center></td>
	</tr>
  @endforeach
	</table><br>
  <center><form action="/freeprisonhistories/insertpage"><input type="submit" value="Add Free Prison History"></form></center>
	<div align = "right"><form action="/admin"><input type="submit" value="back"></form></div>
</div>
@endsection
