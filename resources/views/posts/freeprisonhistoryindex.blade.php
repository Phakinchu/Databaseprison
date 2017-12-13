@extends('layouts.app')

@section('content')
<div class="blog-header" align = "center">
  <h1 class="blog-title">Freeprisonhistory List</h1>
	<p class="lead blog-description">All freeprisonhistories</p>
</div>	
  <table class="table table-hover"><tr> 
  	<td><center>IDfreeprison</center></td>
  	<td><center>freedate</center></td>
  	<td><center>fname</center></td>
  	<td><center>lname</center></td>
    <td><center>typefreedom</center></td>
  	<td><center>id_prisoner</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_freeprison}}</center></td>
		<td><center>{{$post->freedate}}</center></td>
		<td><center>{{$post->fname}}</center></td>
		<td><center>{{$post->lname}}</center></td>
        <td><center>{{$post->type_of_freedom}}</center></td>
		<td><center>{{$post->id_prisoner}}</center></td>
		<td><center><a href="/freeprisonhistory/{{$post->id_freeprison}}/editpage">Click</a></center></td>
		<td><center><a href="/freeprisonhistory/{{$post->id_freeprison}}/delete">Click</a></center></td>
	</tr>
  <br> 
  @endforeach
	</table><br>
  <center><form action="/freeprisonhistories/insertpage"><input type="submit" value="Add Freeprisonhistory"></form></center>
</div>
@endsection
