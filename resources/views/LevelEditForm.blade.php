<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div align = "center">
<h1 class="blog-title">Level Edit</h1><br>
	<form action='/level/{{$id}}/editsave' method="post">
	<table>
		<tr>
			<td height = "30">lv </td>
			<td><input type="text" name="lv"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/levels">
    <input type="submit" value="Back">
	</form>

@endsection