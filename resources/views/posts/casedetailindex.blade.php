@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("http://www.desktop-backgrounds.com/images/caribbean-sunset.jpg");
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>

<div align = "right">
<form action="/casedetails/search" method="post">Search By ID prisoner <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Case Detail</h1><br>
	<!-- <p class="lead blog-description">All casedetails</p> -->
  <table class="table table-hover"><tr> 
  	<td><center>CasedetailID</center></td>
  	<td><center>section</center></td>
  	<td><center>punishment</center></td>
  	<td><center>duration</center></td>
  	<td><center>PrisonerID</center></td>
		<td><center>officer ที่ดูแลคดี</center></td>
		<td><center>Edit ผู้ดูแลคดี</center></td>
		<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
			<td><center>{{$post->id_case}}</center></td>
			<td><center>{{$post->case_section}}</center></td>
			<td><center>{{$post->punishment}}</center></td>
      <td><center>{{$post->case_duration}}</center></td>
      <td><center>{{$post->id_prisoner}}</center></td>
			<td><center>@foreach ($post->officers as $officer)
   		 ID :
   		 {{$officer->id_officer}}<br>@endforeach</center></td>
			<td><center><a href="/casedetail/{{$post->id_case}}/editsupervisepage">Click</a></center></td>
			<td><center><a href="/casedetail/{{$post->id_case}}/editpage">Click</a></center></td>
			<td><center><a href="/casedetail/{{$post->id_case}}/delete">Click</a></center></td>
		</tr>
  @endforeach
	</table><br>
  <center><form action="/casedetails/insertpage"><input type="submit" value="Add Case Detail"></form></center>
</div>
@endsection
