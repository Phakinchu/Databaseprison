@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Activity List</h1>
	<p class="lead blog-description">All activities</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>ActivityID</center></td>
  	<td><center>activity</center></td>
  	<td><center>duration(hrs)</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
		<td><center>{{$post->id_activity}}</center></td>
		<td><center>{{$post->activity}}</center></td>
		<td><center>{{$post->act_duration}}</center></td>
		<td><center><a href="/activity/{{$post->id_activity}}/editpage">Click</a></center></td>
		<td><center><a href="/activity/{{$post->id_activity}}/delete">Click</a></center></td>
	</tr>
    </table><br> 

  @endforeach

  <form action="/activities/insertpage"><input type="submit" value="Add Activity"></form>
</div>
@endsection
