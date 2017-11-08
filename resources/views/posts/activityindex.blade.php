@extends('layouts.app')

@section('content')
echo "<h1>All Activity</h1>";
	echo "<table border=2><tr>
	<td><center>Activity_id</center></td>
	<td><center>Activity</center></td>
	<td><center>Duration</center></td>
	<!-- <td><center>Edit</center></td>
	<td><center>Delete</center></td>"; -->
    
        foreach ($activitys as $activity) {
            echo "
			<tr>
			<td><center>$activity->id_activity</center></td>
			<td><center>$activity->activity</center></td>
			<td>$activity->act_duration</td>
			<!-- <td><center><a href=\"/prisoner/$prisoner->id_prisoner/editpage\">Click</a></center></td> -->
			<!-- <td><center><a href=\"/prisoner/$prisoner->id_prisoner/delete\">Click</a></center></td> -->
			</tr>";
        }
	echo "</table><br>";
	
    <!-- echo"<form action=\"/prisoners/insertpage\"><input type=\"submit\" value=\"Add Prisoner\"></form>"; -->
    });
@endsection