@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://static.vecteezy.com/system/resources/previews/000/113/015/non_2x/light-blue-free-vector-watercolor-texture.jpg");
	background-repeat: repeat;
    background-size: 120% 120%;
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>

<div class="blog-header" align = "center">
  <h1 class="blog-title">Prisoner List</h1><br>
  <br>
	<!-- <p class="lead blog-description">All prisoners</p> -->
  <table class="table table-hover">
  <tr> 
  	<td ><center>Prisoner ID</center></td>
  	<td ><center> fname </center></td>
  	<td ><center> lname </center></td>
  	<td ><center> address </center></td>
    <td width = "100"><center> DoB </center></td>
  	<td ><center> gender </center></td>
    <td ><center> scorepri </center></td>
    <td ><center> id_level </center></td>
    <td ><center> id_cell </center></td>
    <td width = "100"><center> ผู้คุมที่ดูแล </center></td>
    <td width = "100"><center> คดีที่ติด </center></td>

  </tr>
  </thead>
    @foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_prisoner}}</center></td>
		<td><center>{{$post->fname}}</center></td>
		<td><center>{{$post->lname}}</center></td>
		<td><center>{{$post->address}}</center></td>
    <td><center>{{$post->dob}}</center></td>
		<td><center>{{$post->gender}}</center></td>
    <td><center>{{$post->scorepri}}</center></td>
    <td><center>{{$post->id_level}}</center></td>
    <td><center>{{$post->id_cell}}</center></td>
    <td><center>@foreach ($post->officers as $officer)
    ID :
    {{$officer->id_officer}}<br>@endforeach</center></td>
    <td><center>@foreach ($post->casedetails as $casedetail)
    คดี :
    {{$casedetail->punishment}}<br>@endforeach</center></td>
    
	</tr>
  @endforeach
  </table>
  <br>
  <center><h3>Total prisoner : {{$count}} person</h3></center>
  <br>
  
</div>
@endsection