<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://cdn.pixabay.com/photo/2015/07/24/11/11/watercolor-858172_640.jpg");
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
<h1 class="blog-title">Visit History Insert</h1><br>
	<form action='/visithistories/save' method="post">
	<table>
		<tr>
			<td height = "30">VisitID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td height = "30">name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td height = "30">item </td>
			<td><input type="text" name="item"></td>
		</tr>
		<tr>
			<td height = "30">contract : </td>
			<td><input type="text" name="contract"></td>
		</tr>
		<tr>
			<td height = "30">datetime : </td>
			<td><input type="text" name="datetime"></td>
		</tr>
		<tr>
			<td height = "30">prisonerID : </td>
			<td><input type="text" name="prisoner"></td>
		</tr>
        <tr>
			<td height = "30">officerID : </td>
			<td><input type="text" name="officer"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/visithistories">
    <input type="submit" value="Back">
	</form>

@endsection