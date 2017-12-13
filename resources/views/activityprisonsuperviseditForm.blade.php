@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5sFZYlnnRRlVsAFqJBvz7ZXTUHhQygCuMre--mFDqs2qArLcr");
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
<h1 class="blog-title">Activity Prisoner Edit</h1><br>
	<form action="/activity/{{$id}}/edit_activity_prison_supervisesaveadd" method="post">
	<table>
		<tr>
			<td height = "30">Add Id prisoner : </td>
			<td><input type="text" name="id_prisoner" ></td>
		</tr>
        <tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>


    <form action="/activity/{{$id}}/edit_activity_prison_supervisesavedelete" method="post">
	<table>
        <tr>
			<td height = "30">Delete Id prisoner : </td>
			<td><input type="text" name="id_prisoner" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Delete"></td>
		</tr>
	</table>	
	</form>
        
	<form action="/activitys">
    <br>
    <input type="submit" value="Back">
	</form>

@endsection