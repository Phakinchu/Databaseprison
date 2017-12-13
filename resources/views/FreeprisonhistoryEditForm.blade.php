<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
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