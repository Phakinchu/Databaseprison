<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKHZuDByD0c9fV-EA9YbBi74ZCaphvybU3g-Dvn0gdxA9nYYR8");
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
<h1 class="blog-title">Prisoner Edit</h1><br>
	<form action="/prisoner/{{$id}}/editsave" method="post">
	<table>
		<!-- <tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr> -->
		<tr>
			<td height = "30">Fname : </td>
			<td><input type="text" name="fname" ></td>
		</tr>
		<tr>
			<td height = "30">LName : </td>
			<td><input type="text" name="lname"></td>
		</tr>
		<tr>
			<td height = "30">Gender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td height = "30">DOB : </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td height = "30">Address : </td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td height = "30">level : </td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td height = "30">cell : </td>
			<td><input type="text" name="cell"></td>
		</tr>
		<tr>
			<td height = "30">score : </td>
			<td><input type="text" name="score"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/prisoners">
    <input type="submit" value="Back">
	</form>

@endsection