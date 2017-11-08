@extends('layouts.app')

@section('content')
<div class="blog-header">
	<h1 class="blog-title">{{$title}}</h1>
	<p class="lead blog-description">Search value = {{$officer->gender}}</p>
		
		<table border=2>
			<tr>
				<td><center>officer_id</center></td>
				<td><center>officer_name</center></td>
				<td><center>position</center></td>
				<td><center>gender</center></td>
				<td><center>dob</center></td>
			</tr>
			
	@foreach($officers as $officer)
	{
			<tr>
				<td><center>{{$officer->id_officer}}</center></td>
				<td><center>{{$officer->name}}</center></td>
				<td><center>{{$officer->position}}</center></td>
				<td><center>{{$officer->gender}}</center></td>
				<td><center>{{$officer->dob}}</center></td>
			</tr>
	}
	@endforeach
	</table><br>
</div>
@endsection