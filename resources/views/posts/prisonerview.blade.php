@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By {{$id}}"</h1>
  <p class="lead blog-description"> "Find Prisoner From ID" </p>

      <table border=2><tr> 
      <td><center>Fname</center></td>
      <td><center>Lname</center></td>
      <td><center>Address</center></td>
      <td><center>dob</center></td>
      <td><center>gender</center></td>
      <td><center>scoreprisoner</center></td>
      <td><center>id_officer</center></td>
      <td><center>id_level</center></td>
      </tr>
      <tr>
        <td><center>{{$fname}}</center></td>
        <td><center>{{$lname}}</center></td>
        <td><center>{{$address}}</center></td>
        <td><center>{{$dob}}</center></td>
        <td><center>{{$gender}}</center></td>
        <td><center>{{$scorepri}}</center></td>
        <td><center>{{$idoff}}</center></td>
        <td><center>{{$idlevel}}</center></td>
        </tr>
      </table><br> 
</div>
@endsection