@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By "</h1>
  <p class="lead blog-description"> "Find Prisoner From ID" </p>
  @foreach ($posts as $post)
      <table border=2><tr> 
      <td><center>Fname</center></td>
      <td><center>Lname</center></td>
      <td><center>Address</center></td>
      <td><center>dob</center></td>
      <td><center>gender</center></td>
      <td><center>scoreprisoner</center></td>
      <td><center>id_level</center></td>
      <td><center>id_cell</center></td>
      </tr>
      <tr>
        <td><center>{{$post->fname}}</center></td>
        <td><center>{{$post->lname}}</center></td>
        <td><center>{{$post->address}}</center></td>
        <td><center>{{$post->dob}}</center></td>
        <td><center>{{$post->gender}}</center></td>
        <td><center>{{$post->scorepri}}</center></td>
        <td><center>{{$post->id_level}}</center></td>
        <td><center>{{$post->id_cell}}</center></td>
        </tr>
      </table><br> 
    @endforeach
</div>
@endsection