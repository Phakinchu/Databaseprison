@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaMHW0JWI4GmA8PhqcBpzQJGtyHAog230C4neWyvPLN0pGWpoF");
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
<h1 class="blog-title">Edit Area</h1><br>
	<form action="/activity/{{$id}}/edit_activity_area_supervisesaveadd" method="post">
	<table>
		<tr>
			<td  height = "30">Add Id area : </td><br>
			<td><input type="text" name="id_area" ></td>
		</tr>
        <tr>
			<center><td><input type="submit" name="submit" value="Add"></td></center>
		</tr>
	</table>
	</form>


    <form action="/activity/{{$id}}/edit_activity_area_supervisesavedelete" method="post">
	<table>
        <tr>
			<td  height = "30">Delete Id area : </td><br>
			<td><input type="text" name="id_area" ></td>
		</tr>
		<tr>
			<center><td><input type="submit" name="submit" value="Delete"></td></center>
		</tr>
	</table>
	</form>
        
	<form action="/activitys">
    <br>
    <input type="submit" value="Back">
	</form>

</div>

@endsection