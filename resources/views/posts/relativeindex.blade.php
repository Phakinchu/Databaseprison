@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://orig00.deviantart.net/522c/f/2007/178/d/3/sunset_twilight_clouds_sky_05_by_fantasystock.jpg");
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
<div align = "right">
<form action="/relative/search" method="post">Search by Relative name <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Relative List</h1><br>
	<!-- <p class="lead blog-description">All relative</p> -->
<div>  
  <table class="table table-hover">
  <tr> 
  	<td><center>Relative ID</center></td>
  	<td><center>name</center></td>
  	<td><center>Contract detail</center></td>
    <td><center>ชื่อนักโทษ</center></td>
    <td><center>เพิ่มนักโทษ</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
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
    <td><center><a href="/relative/{{$post->id_relative}}/editsupervisepage">Click</a></center></td>
  	<td><center><a href="/relative/{{$post->id_relative}}/editpage">Click</a></center></td>
  	<td><center><a href="/relative/{{$post->id_relative}}/delete">Click</a></center></td>
	</tr>
  @endforeach
  </table><br>
  <div align = "center">
  <h3>Total Relative : {{$count}} person</h3><br>
  <form action="/relatives/insertpage"><input type="submit" value="Add Relative"></form>
</div>
<div align = "right"><form action="/admin"><input type="submit" value="back"></form></div>
@endsection