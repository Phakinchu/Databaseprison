@extends('layouts.app')
<!DOCTYPE html>
@section('content')
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