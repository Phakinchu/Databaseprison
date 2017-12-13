@extends('layouts.app')

@section('content')
<div class="blog-header" align = "center">
  <h1 class="blog-title">Prisoner Behavioral History List</h1><br>
	<!-- <p class="lead blog-description">All prisonerbehavioralhistories</p> -->
</div>	
  <table class="table table-hover">
	<tr> 
  	<td><center>IDbehav</center></td>
  	<td><center>crime</center></td>
  	<td><center>guilt</center></td>
  	<td><center>start_date</center></td>
    <td><center>end_date</center></td>
  	<td><center>prisonerID</center></td>
		<td><center>prisoner Name</center></td>
		<td><center>officerID</center></td>
		<td><center>officer Name</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_behav}}</center></td>
		<td><center>{{$post->crime}}</center></td>
		<td><center>{{$post->guilt}}</center></td>
		<td><center>{{$post->start_date}}</center></td>
    <td><center>{{$post->end_date}}</center></td>
		<td><center>{{$post->id_prisoner}}</center></td>
		<td><center>{{$post->prisoners->fname}} {{$post->prisoners->lname}}</center></td>
		<td><center>{{$post->id_officer}}</center></td>
		<td><center><a href="/prisonerbehavioralhistory/{{$post->id_behav}}/editpage">Click</a></center></td>
		<td><center><a href="/prisonerbehavioralhistory/{{$post->id_behav}}/delete">Click</a></center></td>
	</tr>
  @endforeach
	</table>
	<br>
  <center><form action="/prisonerbehavioralhistories/insertpage"><input type="submit" value="Add Prisoner Behavioral History"></form></center><br>
</div>
@endsection
