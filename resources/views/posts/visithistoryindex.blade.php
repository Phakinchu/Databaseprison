@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("http://www.publicdomainpictures.net/pictures/120000/nahled/watercolor-bokeh-pastel-background.jpg");
	background-repeat: repeat;
    background-size: 120% 120%;
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
<div align = "right">
<form action="/visithistory/search" method="post">Search By Relative Name <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Visit History List</h1><br>
	<!-- <p class="lead blog-description">All visithistories</p>	 -->
  <table class="table table-hover"><tr>
  	<td><center>Visit</center></td>
  	<td><center>relative_name</center></td>
  	<td><center>item</center></td>
  	<td><center>contract</center></td>
    <td><center>datetime</center></td>
  	<td><center>id_prisoner</center></td>
    <td><center>id_officer</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_visit}}</center></td>
		<td><center>{{$post->name}}</center></td>
		<td><center>{{$post->item}}</center></td>
		<td><center>{{$post->contract_detail}}</center></td>
    <td><center>{{$post->Datetime}}</center></td>
		<td><center>{{$post->id_prisoner}}</center></td>
    <td><center>{{$post->id_officer}}</center></td>
		<td><center><a href="/visithistory/{{$post->id_visit}}/editpage">Click</a></center></td>
		<td><center><a href="/visithistory/{{$post->id_visit}}/delete">Click</a></center></td>
	</tr>
  @endforeach
	</table><br>
  <center><form action="/visithistories/insertpage"><input type="submit" value="Add Visit History"></form></center>
	<div align = "right"><form action="/admin"><input type="submit" value="back"></form></div>
</div>
@endsection
