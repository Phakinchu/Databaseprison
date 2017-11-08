@extends('layouts.app')

@section('content')
echo "<h1>All Area</h1>";
	echo "<table border=2><tr>
	<td><center>Area_id</center></td>
	<td><center>Area_Level</center></td>
	<td><center>NumberofPrisoner</center></td>
	<td><center>NumberofOfficer</center></td>
	<td><center>Jailid</center></td>
	<!-- <td><center>Edit</center></td>
	<td><center>Delete</center></td>"; -->
    
        foreach ($areas as $area) {
            echo "
			<tr>
			<td><center>$area->id_area</center></td>
			<td><center>$area->level_area</center></td>
			<td>$area->number_of_prisoner</td>
			<td><center>$area->number_of_offficer</center></td>
			<td><center>$area->jail_id</center></td>
			<!-- <td>$prisoner->address</td>
			<td><center>$prisoner->id_officer</center></td>
			<td><center>$prisoner->id_level</center></td> -->
			<!-- <td><center><a href=\"/prisoner/$prisoner->id_prisoner/editpage\">Click</a></center></td> -->
			<!-- <td><center><a href=\"/prisoner/$prisoner->id_prisoner/delete\">Click</a></center></td> -->
			</tr>";
        }
	echo "</table><br>";
	
    <!-- echo"<form action=\"/prisoners/insertpage\"><input type=\"submit\" value=\"Add Prisoner\"></form>"; -->
    });
@endsection