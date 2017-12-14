<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ40-UBOK9TUievMIqEgqzxsgZa7lyo3GRgpDBcsnGY8bHcNlIV");
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
<h1 class="blog-title">Freedom Insert</h1><br>
	<form action='/freeprisonhistories/save' method="post">
	<table>
		<tr>
			<td height = "30">IDfreeprison : </td>
			<td><input type="text" name="id"></td>
		</tr>
        <tr>
            <td height = "30">freedate : </td>
            <td><input type="text" name="freedate"></td>
        </tr>
        <tr>
           <td height = "30">type of freedom : </td>
           <td><input type="text" name="typefreedom"></td>
        </tr>
        <tr>
           <td height = "30">prisonerID : </td>
           <td><input type="text" name="prisoner"></td>
        </tr>
        <tr>
           <td><input type="submit" name="submit" value="Add"></td>
        </tr>
	</table>
	</form>
	<form action="/freeprisonhistories">
    <input type="submit" value="Back">
	</form>

@endsection