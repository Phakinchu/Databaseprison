@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Visithistory List</h1>
	<p class="lead blog-description">All visithistories</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>Visit</center></td>
  	<td><center>relative_name</center></td>
  	<td><center>item</center></td>
  	<td><center>contract</center></td>
    <td><center>datetime</center></td>
  	<td><center>id_prisoner</center></td>
    <td><center>id_officer</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
		<td><center>{{$post->id_visit}}</center></td>
		<td><center>{{$post->name}}</center></td>
		<td><center>{{$post->item}}</center></td>
		<td><center>{{$post->contract_detail}}</center></td>
        <td><center>{{$post->Datetime}}</center></td>
		<td><center>{{$post->id_prisoner}}</center></td>
        <td><center>{{$post->id_officer}}</center></td>
		<td><center><a href="/visithistory/{{$post->id_visit}}/editpage">Click</a></center></td>
		<td><center><a href="/visithistory/{{$post->id_visit}}/delete">Click</a></center></td>
	</tr>
    </table><br> 

  @endforeach

  <form action="/visithistories/insertpage"><input type="submit" value="Add Visithistory"></form>
</div>
@endsection
