<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div align = "center">
<h1 class="blog-title">Relative Edit</h1><br>
	<form action="/relative/{{$id}}/editsave" method="post">
	<table>
		<tr>
			<td height = "30">name : </td>
			<td><input type="text" name="name" ></td>
		</tr>
		<tr>
			<td height = "30">contractdetail : </td>
			<td><input type="text" name="contractdetail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/relatives">
    <input type="submit" value="Back">
	</form>

@endsection