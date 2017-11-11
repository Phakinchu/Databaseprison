@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Prisoner List</h1>
  <p class="lead blog-description">All Prisoner</p>
  <div class="panel panel-default">
    <div class="panel-heading">Prisoner List</div>
    <!-- <table class="table">
      <tr> 
  	      <td>prisoner</td>
          <td>prisoner_fname</td>
  	      <td>prisoner_lname</td>
  	      <td>gender</td>
          <td>dob</td>
  	      <td>add</td>
          <td>id_officer</td>
          <td>id_level</td>
          <td>score</td>
  	      <td>Edit</td>
  	      <td>Delete</td>
      </tr> -->
    @foreach ($posts as $post)    
      <table class="table">
        <tr>
			    <td>{{$post->id_prisoner}}</td>
			    <td>{{$post->fname}}</td>
			    <td>{{$post->lname}}</td>
			    <td>{{$post->gender}}</td>
          <td>{{$post->dob}}</td>
			    <td>{{$post->address}}</td>
          <td>{{$post->id_officer}}</td>
          <td>{{$post->id_level}}</td>
          <td>{{$post->scorepri}}</td>
			    <td><a href="/prisoner/{{$post->id_prisoner}}/editpage">Click</a></center></td>
			    <td><a href="/prisoner/{{$post->id_prisoner}}/delete">Click</a></center></td>
			  </tr>
    </table><br> 

  @endforeach

  <form action="/prisoners/insertpage"><input type="submit" value="Add Prisoner"></form>
</div>
@endsection
