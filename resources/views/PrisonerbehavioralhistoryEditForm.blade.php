<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://st.depositphotos.com/1813957/4505/i/950/depositphotos_45057915-stock-photo-pastel-purple-distressed-background.jpg");
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
<h1 class="blog-title">Behavior Edit</h1><br>
	<form action="/prisonerbehavioralhistory/{{$id}}/editsave" method="post">
	<table>
   
        <tr>
         <td height = "30">crime : </td>
         <td><input type="text" name="crime"></td>
        </tr>
        <tr>
            <td height = "30">guilt </td>
            <td><input type="text" name="guilt"></td>
        </tr>
        <tr>
            <td height = "30">start_date : </td>
            <td><input type="text" name="start_date"></td>
        </tr>
        <tr>
            <td height = "30">end_date : </td>
            <td><input type="text" name="end_date"></td>
        </tr>
        <tr>
            <td height = "30">prisonerID : </td>
            <td><input type="text" name="prisoner"></td>
        </tr>
        <tr>
            <td height = "30">officerID : </td>
            <td><input type="text" name="officer"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>
	</table>
	</form>
	<form action="/prisonerbehavioralhistories">
    <input type="submit" value="Back">
	</form>

@endsection