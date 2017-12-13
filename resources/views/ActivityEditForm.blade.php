@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaNEWrNB8MfBkH5jn3qJVOqdI1c3IgLyKI3ChlDEnvcpgsyiX1");
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
    <h1 class="blog-title">Activity Edit</h1><br>
	<form action="/activity/{{$id}}/editsave" method="post">
	<table>
        <tr>
         <td height = "30">Activity : </td>
         <td><input type="text" name="activity"></td>
        </tr>
        <tr>
            <td height = "30">Duration (hrs) </td>
            <td><input type="text" name="duration"></td>
        </tr>
        <tr>
            <td><center><br><input type="submit" name="submit" value="Edit"></td></center>
        </tr>
	</table>
	</form>
	<form action="/activities">
    <input type="submit" value="Back">
	</form>
</div>

@endsection