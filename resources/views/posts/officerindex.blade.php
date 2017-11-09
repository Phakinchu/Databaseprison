@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Officer</h1>
  <p class="lead blog-description">All officers</p>
	
  @foreach ($posts as $post)

    <table border=2><tr> 
  	<td><center>officer</center></td>
  	<td><center>officer_name</center></td>
  	<td><center>gender</center></td>
  	<td><center>dob</center></td>
    <td><center>id_position</center></td>
  	<td><center>id_jail</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
			<td><center>{{$post->id_officer}}</center></td>
			<td><center>{{$post->name}}</center></td>
			<td><center>{{$post->gender}}</center></td>
			<td><center>{{$post->dob}}</center></td>
      <td><center>{{$post->position}}</center></td>
			<td><center>{{$post->id_jail}}</center></td>
			<td><center><a href="/officer/{{$post->id_officer}}/editpage">Click</a></center></td>
			<td><center><a href="/officer/{{$post->id_officer}}/delete">Click</a></center></td>
			</tr>
    </table><br> 

  @endforeach

	<form action="/officers/insertpage"><input type="submit" value="Add Officer"></form>

</div>
@endsection