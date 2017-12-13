<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("http://paper-backgrounds.com/textureimages/2012/06/sunset-dramatic-sky-clouds-background-hd.jpg");
}
h1{
	color: black;
}
</style>
<div align = "center">
<h1 class="blog-title">Relative Supervise</h1><br>
	<form action="/relative/{{$id}}/editsupervisesaveadd" method="post">
	<table>
		<tr>
			<td  height = "30">Add Id prisoner : </td>
			<td><input type="text" name="id_prisoner" ></td>
		</tr>
        <tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>


    <form action="/relative/{{$id}}/editsupervisesavedelete" method="post">
	<table>
        <tr>
			<td  height = "30">Delete Id prisoner : </td>
			<td><input type="text" name="id_prisoner" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Delete"></td>
		</tr>
	</table>
	</form>
        
	<form action="/relatives">
    <br>
    <input type="submit" value="Back">
	</form>
@endsection