<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("http://birthdoulabayarea.com/wp-content/uploads/2013/12/Watercolor_Texture4_by_ValerianaSTOCK1.jpg");
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
<h1 class="blog-title">Reduce Punishment Edit</h1><br>
	<form action="/prisonereducepunishmenthistory/{{$id}}/editsave" method="post">
	<table>

	<tr>
    <td height = "30">cause : </td>
    <td><input type="text" name="cause"></td>
</tr>
<tr>
    <td height = "30">time (d) </td>
    <td><input type="text" name="time"></td>
</tr>
<tr>
    <td height = "30">date : </td>
    <td><input type="text" name="date"></td>
</tr>
<tr>
    <td height = "30">prisoner : </td>
    <td><input type="text" name="prisoner"></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="Edit"></td>
</tr>
	</table>
	</form>
	<form action="/prisonereducepunishmenthistories">
    <input type="submit" value="Back">
	</form>

@endsection