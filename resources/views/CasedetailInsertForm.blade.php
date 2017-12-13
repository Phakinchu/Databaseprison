@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSARmmbnzF857MNUCqUU_2n_m0r2ok1IeRNwGtrdM6heRztDB78");
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
<h1 class="blog-title">Case Detail Insert</h1><br>
	<form action='/casedetails/save' method="post">
	<table>
		<tr>
			<td height = "30">CasedetailID : </td>
			<td><input type="text" name="id"></td>
		</tr>
        <tr>
        <td height = "30">section : </td>
        <td><input type="text" name="section"></td>
       </tr>
       <tr>
           <td height = "30">punishment </td>
           <td><input type="text" name="punishment"></td>
       </tr>
       <tr>
           <td height = "30">duration</td>
           <td><input type="text" name="duration"></td>
       </tr>
       <tr>
           <td height = "30">PrisonerID</td>
           <td><input type="text" name="prisoner"></td>
       </tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/casedetails">
    <input type="submit" value="Back">
	</form>

@endsection