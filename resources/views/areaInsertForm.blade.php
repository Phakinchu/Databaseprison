@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://st.depositphotos.com/1813957/4505/i/950/depositphotos_45057915-stock-photo-pastel-purple-distressed-background.jpg");
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
<h1 class="blog-title">Area Insert</h1><br>
	<form action='/areas/save' method="post">
	<table>
		<tr>
			<td height = "30">Area ID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td height = "30">Level area : </td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td height = "30">ID jail : </td>
			<td><input type="text" name="idjail"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/areas">
    <input type="submit" value="Back">
	</form>

@endsection