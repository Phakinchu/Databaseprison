<@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div align = "center">
<h1 class="blog-title">Behavior Insert</h1><br>
	<form action='/prisonerbehavioralhistories/save' method="post">
	<table>
		<tr>
			<td height = "30">IDbehav : </td>
			<td><input type="text" name="id"></td>
		</tr>
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
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/prisonerbehavioralhistories">
    <input type="submit" value="Back">
	</form>

@endsection