<<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://static.decalgirl.com/assets/designs/large/rose-marble.jpg");
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
<h1 class="blog-title">Reduce Punishment Insert</h1><br>
	<form action='/prisonereducepunishmenthistories/save' method="post">
	<table>
		<tr>
			<td height = "30">ReduceID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td height = "30">cause : </td>
			<td><input type="text" name="cause"></td>
		</tr>
		<tr>
			<td height = "30">time (d) </td>
			<td><input type="text" name="time"></td>
		</tr>
		<tr>
			<td height = "30">date : </td>
			<td><input type="text" name="date"></td>
		</tr>
		<tr>
			<td height = "30">prisoner : </td>
			<td><input type="text" name="prisoner"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/prisonereducepunishmenthistories">
    <input type="submit" value="Back">
	</form>

@endsection