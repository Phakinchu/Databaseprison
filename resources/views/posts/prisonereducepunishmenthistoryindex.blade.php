@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Prisonereducepunishmenthistory List</h1>
  <p class="lead blog-description">All Prisonereducepunishmenthistory</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>id_reducehis</center></td>
  	<td><center>cause</center></td>
  	<td><center>time (d) </center></td>
  	<td><center>date</center></td>
    <td><center>id_prisoner</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
			<td><center>{{$post->id_reducehis}}</center></td>
			<td><center>{{$post->cause_reduce}}</center></td>
			<td><center>{{$post->time_reducted}}</center></td>
			<td><center>{{$post->start_datereduce}}</center></td>
            <td><center>{{$post->id_prisoner}}</center></td>
			<td><center><a href="/prisonereducepunishmenthistory/{{$post->id_reducehis}}/editpage">Click</a></center></td>
			<td><center><a href="/prisonereducepunishmenthistory/{{$post->id_reducehis}}/delete">Click</a></center></td>
			</tr>
    </table><br> 

  @endforeach

  <form action="/prisonereducepunishmenthistories/insertpage"><input type="submit" value="Add Prisoner"></form>
</div>
@endsection
