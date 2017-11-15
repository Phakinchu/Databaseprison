@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By {{$id}}"</h1>
  <p class="lead blog-description"> "Find Officer From ID" </p>

  
      <table border=2><tr> 
      <td><center>officer_name</center></td>
      <td><center>gender</center></td>
      <td><center>dob</center></td>
      <td><center>position</center></td>
      <td><center>id_jail</center></td>
      </tr>
      <tr>
        <td><center>{{$name}}</center></td>
        <td><center>{{$gender}}</center></td>
        <td><center>{{$dob}}</center></td>
        <td><center>{{$position}}</center></td>
        <td><center>{{$jail}}</center></td>
        </tr>
      </table><br> 
  
      

</div>
@endsection