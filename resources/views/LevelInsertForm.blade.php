<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://st.depositphotos.com/1350793/1377/i/950/depositphotos_13773490-stock-photo-abtract-ligths-background-glowing-pale.jpg");
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
<h1 class="blog-title">Level Insert</h1><br>
	<form action='/levels/save' method="post">
	<table>
		<tr>
			<td height = "30">id_level : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td height = "30">lv </td>
			<td><input type="text" name="lv"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/levels">
    <input type="submit" value="Back">
	</form>
@endsection