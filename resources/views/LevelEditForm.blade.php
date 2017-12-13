<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://st.depositphotos.com/1813957/4503/i/950/depositphotos_45030475-stock-photo-abstract-pastel-colorful-background.jpg");
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
<div align = "center">
<h1 class="blog-title">Level Edit</h1><br>
	<form action='/level/{{$id}}/editsave' method="post">
	<table>
		<tr>
			<td height = "30">lv </td>
			<td><input type="text" name="lv"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/levels">
    <input type="submit" value="Back">
	</form>

@endsection