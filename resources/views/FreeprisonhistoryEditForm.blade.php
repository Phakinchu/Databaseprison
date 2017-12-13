<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://cdn.pixabay.com/photo/2017/06/15/23/56/paint-2407291_960_720.jpg");
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
<h1 class="blog-title">Freedom History</h1><br>

	<form action="/freeprisonhistory/{{$id}}/editsave" method="post">
	<table>
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
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>
	</table>
	</form>
	<form action="/freeprisonhistories">
    <input type="submit" value="Back">
	</form>

@endsection