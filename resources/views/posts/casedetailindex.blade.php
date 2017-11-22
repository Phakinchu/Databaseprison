@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Casedetail List</h1>
	<p class="lead blog-description">All casedetails</p>
  @foreach ($posts as $post)
  <table border=2><tr> 
  	<td><center>CasedetailID</center></td>
  	<td><center>section</center></td>
  	<td><center>punishment</center></td>
  	<td><center>duration</center></td>
  	<td><center>PrisonerID</center></td>
		<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
    <tr>
			<td><center>{{$post->id_case}}</center></td>
			<td><center>{{$post->case_section}}</center></td>
			<td><center>{{$post->punishment}}</center></td>
      <td><center>{{$post->case_duration}}</center></td>
      <td><center>{{$post->id_prisoner}}</center></td>
			<td><center><a href="/casedetail/{{$post->id_case}}/editpage">Click</a></center></td>
			<td><center><a href="/casedetail/{{$post->id_case}}/delete">Click</a></center></td>
		</tr>
    </table><br> 

  @endforeach

  <form action="/casedetails/insertpage"><input type="submit" value="Add Casedetail"></form>
</div>
@endsection
