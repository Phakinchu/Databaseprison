@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div align = "center">
<h1 class="blog-title">Case Detail Supervise Edit</h1><br>
	<form action="/casedetail/{{$id}}/editsupervisesaveadd" method="post">
	<table>
		<tr>
			<td height = "30">Add Id officer : </td>
			<td><input type="text" name="id_officer" ></td>
		</tr>
        <tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>


    <form action="/casedetail/{{$id}}/editsupervisesavedelete" method="post">
	<table>
        <tr>
			<td height = "30">Delete Id officer : </td>
			<td><input type="text" name="id_officer" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Delete"></td>
		</tr>
	</table>
	</form>
        
	<form action="/prisoners">
    <br>
    <input type="submit" value="Back">
	</form>

@endsection