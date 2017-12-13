@extends('layouts.app')

@section('content')
<div align = "right">
<form action="/officer/search" method="post">SearchID <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Officer</h1><br>
  <!-- <p class="lead blog-description">All officers</p> -->
</div>	
	<table class="table table-hover">
  <tr> 
  	<td><center>officer</center></td>
  	<td><center>officer_name</center></td>
  	<td><center>gender</center></td>
  	<td><center>dob</center></td>
    <td><center>position</center></td>
  	<td><center>id_area</center></td>
		<td><center>ดูแลนักโทษ</center></td>
		<td><center>ดูแลคดี</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
  </tr>
		@foreach ($posts as $post)
    <tr>
			<td><center>{{$post->id_officer}}</center></td>
			<td><center>{{$post->name}}</center></td>
			<td><center>{{$post->gender}}</center></td>
			<td><center>{{$post->dob}}</center></td>
      <td><center>{{$post->position}}</center></td>
			<td><center>{{$post->id_area}}</center></td>
			<td><center>@foreach ($post->prisoners as $prisoner)
   		 ID :
   		 {{$prisoner->id_prisoner}}<br>@endforeach</center></td>
		<td><center>@foreach ($post->casedetails as $casedetail)
   		 ID :
   		 {{$casedetail->id_case}}<br>@endforeach</center></td>
			<td><center><a href="/officer/{{$post->id_officer}}/editpage">Click</a></center></td>
			<td><center><a href="/officer/{{$post->id_officer}}/delete">Click</a></center></td>
			</tr>
  @endforeach
	</table>
	<div align = "center"><br>
	<h3>Total Officers : {{$count}} person</h3><br>
	<form action="/officers/insertpage"><input type="submit" value="Add Officer"></form>
</div>
@endsection