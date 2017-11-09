@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Prisoner List</h1>
  <p class="lead blog-description">All Prisoner</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>prisoner</center></td>
  	<td><center>prisoner_fname</center></td>
  	<td><center>prisoner_lname</center></td>
  	<td><center>gender</center></td>
    <td><center>dob</center></td>
  	<td><center>add</center></td>
    <td><center>id_officer</center></td>
    <td><center>id_level</center></td>
    <td><center>score</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
			<td><center>{{$post->id_prisoner}}</center></td>
			<td><center>{{$post->fname}}</center></td>
			<td><center>{{$post->lname}}</center></td>
			<td><center>{{$post->gender}}</center></td>
      <td><center>{{$post->dob}}</center></td>
			<td><center>{{$post->address}}</center></td>
      <td><center>{{$post->id_officer}}</center></td>
      <td><center>{{$post->id_level}}</center></td>
      <td><center>{{$post->scorepri}}</center></td>
			<td><center><a href="/prisoner/{{$post->id_prisoner}}/editpage">Click</a></center></td>
			<td><center><a href="/prisoner/{{$post->id_prisoner}}/delete">Click</a></center></td>
			</tr>
    </table><br> 

  @endforeach

  <form action="/prisoners/insertpage"><input type="submit" value="Add Prisoner"></form>
</div>
@endsection
