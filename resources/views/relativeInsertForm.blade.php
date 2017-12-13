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
<h1 class="blog-title">Relative Insert</h1><br>
	<form action='/relatives/save' method="post">
	<table>
         <tr>
			<td height = "30">Relative ID : </td>
			<td><input type="text" name="id_relative"></td>
		</tr>
		<tr>
			<td height = "30">Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td height = "30">Contractdetail : </td>
			<td><input type="text" name="contractdetail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/relatives">
    <input type="submit" value="Back">
	</form>

@endsection