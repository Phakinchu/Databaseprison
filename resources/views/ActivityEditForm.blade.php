@extends('layouts.app')
<!DOCTYPE html>
@section('content')
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