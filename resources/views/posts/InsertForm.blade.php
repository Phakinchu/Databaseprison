@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy0YIAFTlVfuBRMFh88G1rgHl1CxsS4Ff9od13RPGXWFoDbddU");
	background-repeat: no-repeat;
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
<h1 class="blog-title">Insert Prisoner</h1><br>
	<form action='/prisoners/save' method="post">
	<table>
		<tr>
			<td height = "30">PrisonerID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td height = "30">Fname : </td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td height = "30">LName : </td>
			<td><input type="text" name="lname"></td>
		</tr>
		<tr>	
			<td height = "30">gender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td height = "30">DOB </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td height = "30">Address : </td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td height = "30">level : </td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td height = "30">cell : </td>
			<td><input type="text" name="cell"></td>
		</tr>
		<tr>
			<td height = "30">score : </td>
			<td><input type="text" name="score"></td>
		</tr>
		</table><br>
		
			<input type="submit" name="submit" value="Add">
		
		<br><br>
	</form>
	<form action="/prisoners">
    <input type="submit" value="Back">
	</form>
</div>
@endsection
