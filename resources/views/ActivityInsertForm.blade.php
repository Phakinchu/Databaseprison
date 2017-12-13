@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://data.whicdn.com/images/14048667/original.jpg");
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
<h1 class="blog-title">Insert Activity</h1><br>
	<form action='/activities/save' method="post">
	<table>
		<tr>
			<td height = "30">ActivityID : </td>
			<td><input type="text" name="id"></td>
		</tr>
        <tr>
        <td height = "30">Activity : </td>
        <td><input type="text" name="activity"></td>
       </tr>
       <tr>
           <td height = "30">Duration (hrs) </td>
           <td><input type="text" name="duration"></td>
       </tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/activities">
    <input type="submit" value="Back">
	</form>
</div>

@endsection