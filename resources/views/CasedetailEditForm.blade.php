@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://userscontent2.emaze.com/images/dc68ddfd-bba7-46be-970a-cf6433485ec8/37ee1b0b8a80a8a7028e1586cee9ff5c.jpg");
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
<h1 class="blog-title">Case Detail Edit</h1><br>
	<form action="/casedetail/{{$id}}/editsave" method="post">
	<table>
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
       <td height = "30">prisonerID</td>
       <td><input type="text" name="prisoner"></td>
   </tr>
        <tr>
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>
	</table>
	</form>
	<form action="/casedetails">
    <input type="submit" value="Back">
	</form>

@endsection