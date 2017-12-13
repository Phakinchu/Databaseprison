@extends('layouts.app')

@section('content')
<div class="blog-header" align = "center">
  <h1 class="blog-title">Level</h1>
  <p class="lead blog-description">All Levels</p>
</div>	
	<table class="table table-hover">
		<tr> 
  	<td><center>id_level</center></td>
  	<td><center>score</center></td>
  	<td><center>lv</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
			<td><center>{{$post->id_level}}</center></td>
			<td><center>{{$post->score}}</center></td>
			<td><center>{{$post->lv}}</center></td>
			<td><center><a href="/level/{{$post->id_level}}/editpage">Click</a></center></td>
			<td><center><a href="/level/{{$post->id_level}}/delete">Click</a></center></td>
			</tr>
    <br> 

  @endforeach
	</table><br>
	<center><form action="/levels/insertpage"><input type="submit" value="Add Level"></form></center>

</div>
@endsection