@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHa9G8RDh3r7EeBFwupN3djNf9cne4uEzgqRjvW97JaejjjeYV");
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
<div align = "right">
<form action="/prisonereducepunishmenthistory/search" method="post">Search By ID prisoner <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Prisone Reduce Punishment List</h1><br>
  <!-- <p class="lead blog-description">All Prisonereducepunishmenthistory</p> -->
  <table class="table table-hover">
	<tr> 
  	<td><center>id_reducehis</center></td>
  	<td><center>cause</center></td>
  	<td><center>time (d) </center></td>
  	<td><center>date</center></td>
    <td><center>id_prisoner</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
  </tr>
		@foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_reducehis}}</center></td>
		<td><center>{{$post->cause_reduce}}</center></td>
		<td><center>{{$post->time_reducted}}</center></td>
		<td><center>{{$post->start_datereduce}}</center></td>
    <td><center>{{$post->id_prisoner}}</center></td>
			<td><center><a href="/prisonereducepunishmenthistory/{{$post->id_reducehis}}/editpage">Click</a></center></td>
			<td><center><a href="/prisonereducepunishmenthistory/{{$post->id_reducehis}}/delete">Click</a></center></td>
			</tr>
  @endforeach

</table><br>
  <center><form action="/prisonereducepunishmenthistories/insertpage"><input type="submit" value="Add Prisoner Reduce Punishment"></form></center>
	<div align = "right"><form action="/admin"><input type="submit" value="back"></form></div>
</div>
@endsection
