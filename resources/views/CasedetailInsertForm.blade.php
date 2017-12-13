@extends('layouts.app')
<!DOCTYPE html>
@section('content')
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