<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div align = "center">
<h1 class="blog-title">Officer Edit</h1><br>
	<form action="/officer/{{$id}}/editsave" method="post">
	<table>
		<!-- <tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr> -->
		<tr>
			<td height = "30">name : </td>
			<td><input type="text" name="name" ></td>
		</tr>
		<tr>
			<td height = "30">DOB : </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td height = "30">position : </td>
			<td><input type="text" name="position"></td>
		</tr>
		<tr>
			<td height = "30">Gender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td height = "30">area : </td>
			<td><input type="text" name="area"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/officers">
    <input type="submit" value="Back">
	</form>

@endsection