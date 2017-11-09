@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Prisonerbehavioralhistory List</h1>
	<p class="lead blog-description">All prisonerbehavioralhistories</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>IDbehav</center></td>
  	<td><center>crime</center></td>
  	<td><center>guilt</center></td>
  	<td><center>start_date</center></td>
    <td><center>end_date</center></td>
  	<td><center>prisonerID</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
		<td><center>{{$post->id_behav}}</center></td>
		<td><center>{{$post->crime}}</center></td>
		<td><center>{{$post->guilt}}</center></td>
		<td><center>{{$post->start_date}}</center></td>
    <td><center>{{$post->end_date}}</center></td>
		<td><center>{{$post->id_prisoner}}</center></td>
		<td><center><a href="/prisonerbehavioralhistory/{{$post->id_behav}}/editpage">Click</a></center></td>
		<td><center><a href="/prisonerbehavioralhistory/{{$post->id_behav}}/delete">Click</a></center></td>
	</tr>
    </table><br> 

  @endforeach

  <form action="/prisonerbehavioralhistories/insertpage"><input type="submit" value="Add Prisonerbehavioralhistory"></form>
</div>
@endsection
