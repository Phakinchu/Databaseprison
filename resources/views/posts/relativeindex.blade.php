@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Relative List</h1>
	<p class="lead blog-description">All relative</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>Relative ID</center></td>
  	<td><center>name</center></td>
  	<td><center>Contract detail</center></td>
    <td><center>รายชื่อญาติ</center></td>
    <td><center>เพิ่มญาติ</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
	  <td><center>{{$post->id_relative}}</center></td>
	  <td><center>{{$post->name}}</center></td>
  	<td><center>{{$post->contractdetail}}</center></td>
    <td><center>@foreach ($post->prisoners as $prisoner)
    name :{{$prisoner->fname}}<br>
    @endforeach
    </center></td>
    <td><center><a href="/relative/{{$post->id_relative}}/editsupervisepage">Click</a></center></td>
  	<td><center><a href="/relative/{{$post->id_relative}}/editpage">Click</a></center></td>
  	<td><center><a href="/relative/{{$post->id_relative}}/delete">Click</a></center></td>
	</tr>
  </table><br> 
  @endforeach
  <h3>Totla Relative : {{$count}} person</h3>
  <form action="/relative/search" method="post">SearchID<input type="text" name="id" value=""><input type="submit"  value="go"></form>
  <form action="/relatives/insertpage"><input type="submit" value="Add Relative"></form>
</div>
@endsection