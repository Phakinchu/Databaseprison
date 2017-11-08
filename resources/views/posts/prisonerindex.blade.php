@extends('layouts.app')

@section('content')
echo "<h1>All Prisoners</h1>";
echo "<table border=2><tr>
<td><center>prisoner_id</center></td>
<td><center>prisoner_fname</center></td>
<td><center>prisoner_lname</center></td>
<td><center>gender</center></td>
<td><center>dob</center></td>
<td><center>address</center></td>
<td><center>officer</center></td>
<td><center>level</center></td>
<td><center>Edit</center></td>
<td><center>Delete</center></td>";
  
      foreach ($prisoners as $prisoner) {
          echo "
    <tr>
    <td><center>$prisoner->id_prisoner</center></td>
    <td><center>$prisoner->fname</center></td>
    <td>$prisoner->lname</td>
    <td><center>$prisoner->gender</center></td>
    <td><center>$prisoner->dob</center></td>
    <td>$prisoner->address</td>
    <td><center>$prisoner->id_officer</center></td>
    <td><center>$prisoner->id_level</center></td>
    <td><center><a href=\"/prisoner/$prisoner->id_prisoner/editpage\">Click</a></center></td>
    <td><center><a href=\"/prisoner/$prisoner->id_prisoner/delete\">Click</a></center></td>
    </tr>";
      }
echo "</table><br>";

echo"<form action=\"/prisoners/insertpage\"><input type=\"submit\" value=\"Add Prisoner\"></form>";
@endsection