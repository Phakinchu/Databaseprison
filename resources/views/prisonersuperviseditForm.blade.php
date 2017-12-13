<<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/425682/1360/1359/m1/fpnw/wm1/fnllqgtmvrlzjcwvq3uylqrg7uxctfnyslqhyod58lnmlfxhscmlg91doj2avxy6-.jpg?1427736837&s=171813a2f2fd421635de95a5cf27a5bc");
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
<h1 class="blog-title">Prisoner Supervise</h1><br>
	<form action="/prisoner/{{$id}}/editsupervisesaveadd" method="post">
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


    <form action="/prisoner/{{$id}}/editsupervisesavedelete" method="post">
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